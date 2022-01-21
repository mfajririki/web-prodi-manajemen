<?php

namespace App\Http\Controllers;

use App\Models\ProfileLulusan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class ProfileLulusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $profile_lulusan  = ProfileLulusan::latest()->get();

        return view('admin.profile_lulusan.index', compact('profile_lulusan'));
    }

    public function create()
    {
        return view('admin.profile_lulusan.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $profile_lulusan = ProfileLulusan::create([
                'no'          => $request->no,
                'nama'        => $request->nama,
                'deskripsi'        => $request->deskripsi,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('profile_lulusan.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(ProfileLulusan $profile_lulusan)
    {
        return view('admin.profile_lulusan.edit', compact('profile_lulusan',));
    }

    public function update($id, Request $request)
    {
        $profile_lulusan = ProfileLulusan::where('id', $id)
            ->update([
                'no'          => $request->no,
                'nama'        => $request->nama,
                'deskripsi'        => $request->deskripsi,
            ]);



        return redirect(route('profile_lulusan.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(ProfileLulusan $profile_lulusan)
    {
        $profile_lulusan->delete();

        return redirect(route('profile_lulusan.index'))->with('alert', 'Data berhasil dihapus!');
    }
}
