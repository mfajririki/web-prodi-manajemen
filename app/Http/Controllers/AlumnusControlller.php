<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnus;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\AlumnusImport;

class AlumnusControlller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $alumnus  = Alumnus::get();

        return view('admin.alumnus.index', compact('alumnus',));
    }

    public function create()
    {
        return view('admin.alumnus.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data

        DB::transaction(function () use ($request) {
            $file = $request->file('photo');
            if ($file) {
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('images/alumnus/');
                $file->move($destinationPath, $image_name);
            }

            $alumnus = Alumnus::create([
                'nama'          => $request->nama,
                'profesi'       => $request->profesi,
                'photo'          => request('photo') ? "images/alumnus/" . $image_name : null,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('admin-alumnus.index'))->with('alert', 'Profil berhasil dibuat!');
    }

    public function edit(Alumnus $admin_alumnu)
    {
        return view('admin.alumnus.edit', compact('admin_alumnu'));
    }

    public function update($id, Request $request)
    {
        $file = $request->file('photo');
        if ($file) {
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/alumnus/');
            $file->move($destinationPath, $image_name);
        }

        $alumnus = Alumnus::where('id', $id)
            ->update([
                'nama'          => $request->nama,
                'profesi'      => $request->profesi,
                'photo'          => request('photo') ? "images/alumnus/" . $image_name : $request->old,
            ]);

        return redirect(route('admin-alumnus.index'))->with('alert', 'Profil berhasil diupdate!');
    }

    public function destroy(Alumnus $admin_alumnu)
    {
        if (file_exists($admin_alumnu->photo)) {
            unlink($admin_alumnu->photo);
        }

        $admin_alumnu->delete();

        return redirect(route('admin-alumnus.index'))->with('alert', 'Profil berhasil dihapus!');
    }
}
