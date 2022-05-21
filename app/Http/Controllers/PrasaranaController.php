<?php

namespace App\Http\Controllers;

use App\Models\Prasarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrasaranaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $prasarana  = Prasarana::get();

        return view('admin.prasarana.index', compact('prasarana'));
    }

    public function create()
    {
        return view('admin.prasarana.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data

        DB::transaction(function () use ($request) {
            $file = $request->file('photo');
            if ($file) {
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('images/fasilitas/');
                $file->move($destinationPath, $image_name);
            }

            $prasarana = Prasarana::create([
                'nama_fasilitas'          => $request->nama_fasilitas,
                'deskripsi'       => $request->deskripsi,
                'photo'          => request('photo') ? "images/fasilitas/" . $image_name : null,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('admin-prasarana.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function edit(Prasarana $admin_prasarana)
    {
        return view('admin.prasarana.edit', compact('admin_prasarana'));
    }

    public function update($id, Request $request)
    {
        $file = $request->file('photo');
        if ($file) {
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/fasilitas/');
            $file->move($destinationPath, $image_name);
        }

        $prasarana = Prasarana::where('id', $id)
            ->update([
                'nama_fasilitas'          => $request->nama_fasilitas,
                'deskripsi'      => $request->deskripsi,
                'photo'          => request('photo') ? "images/fasilitas/" . $image_name : $request->old,
            ]);

        return redirect(route('admin-prasarana.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(Prasarana $admin_prasarana)
    {
        if (file_exists($admin_prasarana->photo)) {
            unlink($admin_prasarana->photo);
        }

        $admin_prasarana->delete();

        return redirect(route('admin-prasarana.index'))->with('alert', 'Data berhasil dihapus!');
    }
}
