<?php

namespace App\Http\Controllers;

use App\Models\ProfileKaprodi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class ProfileKaprodiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $profile_kaprodi  = ProfileKaprodi::get();

        return view('admin.kaprodi.index', compact('profile_kaprodi',));
    }

    public function create()
    {
        return view('admin.kaprodi.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data

        DB::transaction(function () use ($request) {
            $file = $request->file('photo');
            if ($file) {
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('images/kaprodi/');
                $file->move($destinationPath, $image_name);
            }

            $profile_kaprodi = ProfileKaprodi::create([
                'nama'          => $request->nama,
                'kutipan'       => $request->kutipan,
                'photo'          => request('photo') ? "images/kaprodi/" . $image_name : null,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('admin-kaprodi.index'))->with('alert', 'Profil berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(ProfileKaprodi $profile_kaprodi)
    {
        return view('admin.kaprodi.edit', compact('profile_kaprodi',));
    }

    public function update($id, Request $request)
    {
        $file = $request->file('photo');
        if ($file) {
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/kaprodi/');
            $file->move($destinationPath, $image_name);
        }

        $profile_kaprodi = ProfileKaprodi::where('id', $id)
            ->update([
                'nama'          => $request->nama,
                'kutipan'      => $request->kutipan,
                'photo'          => request('photo') ? "images/kaprodi/" . $image_name : $request->old,
            ]);

        return redirect(route('admin-kaprodi.index'))->with('alert', 'Profil berhasil diupdate!');
    }

    public function destroy(ProfileKaprodi $profile_kaprodi)
    {
        if (file_exists($profile_kaprodi->photo)) {
            unlink($profile_kaprodi->photo);
        }

        $profile_kaprodi->delete();

        return redirect(route('admin-kaprodi.index'))->with('alert', 'Profil berhasil dihapus!');
    }
}
