<?php

namespace App\Http\Controllers;

use App\Models\KerjaSama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KerjaSamaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kerja_sama  = KerjaSama::get();

        return view('admin.kerja_sama.index', compact('kerja_sama',));
    }

    public function create()
    {
        return view('admin.kerja_sama.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data

        DB::transaction(function () use ($request) {
            $file = $request->file('photo');
            if ($file) {
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('images/kerjasama/');
                $file->move($destinationPath, $image_name);
            }

            $kerja_sama = KerjaSama::create([
                'nama_instansi'          => $request->nama_instansi,
                'deskripsi'       => $request->deskripsi,
                'kategori' => $request->kategori,
                'photo'          => request('photo') ? "images/kerjasama/" . $image_name : null,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('admin-kerjasama.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(KerjaSama $admin_kerjasama)
    {
        return view('admin.kerja_sama.edit', compact('admin_kerjasama',));
    }

    public function update($id, Request $request)
    {
        $file = $request->file('photo');
        if ($file) {
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/kerjasama/');
            $file->move($destinationPath, $image_name);
        }

        $kerja_sama = KerjaSama::where('id', $id)
            ->update([
                'nama_instansi'          => $request->nama_instansi,
                'deskripsi'      => $request->deskripsi,
                'kategori' => $request->kategori,
                'photo'          => request('photo') ? "images/kerjasama/" . $image_name : $request->old,
            ]);

        return redirect(route('admin-kerjasama.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(KerjaSama $admin_kerjasama)
    {
        if (file_exists($admin_kerjasama->photo)) {
            unlink($admin_kerjasama->photo);
        }

        $admin_kerjasama->delete();

        return redirect(route('admin-kaprodi.index'))->with('alert', 'Data berhasil dihapus!');
    }
}
