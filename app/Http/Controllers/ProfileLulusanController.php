<?php

namespace App\Http\Controllers;

use App\Models\ProfileLulusan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Http\Controllers\Controller;
use App\Imports\ProfileLulusanImport;
use Maatwebsite\Excel\Facades\Excel;

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

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = time() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('document/import/', $nama_file);

        // import data
        Excel::import(new ProfileLulusanImport, public_path('/document/import/' . $nama_file));

        // notifikasi dengan session
        // Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect(route('profile_lulusan.index'))->with('alert', 'Import berhasil.');
    }

    public function delete_all(ProfileLulusan $profilelulusan)
    {
        $profilelulusan->truncate();

        return redirect(route('profile_lulusan.index'))->with('alert', 'Semua data berhasil dihapus');
    }
}
