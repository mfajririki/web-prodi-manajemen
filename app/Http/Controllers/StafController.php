<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Imports\StafImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Session;

class StafController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $staf_pengajar  = Staf::latest()->get();

        return view('admin.staf_pengajar.index', compact('staf_pengajar'));
    }

    public function create()
    {
        return view('admin.staf_pengajar.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $file = $request->file('photo');
            if ($file) {
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('images/staf/');
                $file->move($destinationPath, $image_name);
            }

            $staf_pengajar = Staf::create([
                'photo'          => request('photo') ? "images/staf/" . $image_name : null,
                'nama'          => $request->nama,
                'nidn'        => $request->nidn,
                'jabatan'          => $request->jabatan,
                'email' => $request->email,
                'sintaid' => $request->sintaid
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('staf_pengajar.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Staf $staf_pengajar)
    {
        return view('admin.staf_pengajar.edit', compact('staf_pengajar',));
    }

    public function update($id, Request $request)
    {
        $file = $request->file('photo');
        if ($file) {
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/staf/');
            $file->move($destinationPath, $image_name);
        }

        $staf_pengajar = Staf::where('id', $id)
            ->update([
                'photo' => request('photo') ? "images/staf/" . $image_name : $request->old,
                'nama' => $request->nama,
                'nidn' => $request->nidn,
                'jabatan' => $request->jabatan,
                'email' => $request->email,
                'sintaid' => $request->sintaid
            ]);

        return redirect(route('staf_pengajar.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(Staf $staf_pengajar)
    {
        if (file_exists($staf_pengajar->photo)) {
            unlink($staf_pengajar->photo);
        }

        $staf_pengajar->delete();

        return redirect(route('staf_pengajar.index'))->with('alert', 'Data berhasil dihapus!');
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
        Excel::import(new StafImport, public_path('/document/import/' . $nama_file));

        // notifikasi dengan session
        // Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect(route('staf_pengajar.index'))->with('alert', 'Import berhasil.');
    }

    public function delete_all(Staf $staf)
    {
        $staf->truncate();

        return redirect(route('staf_pengajar.index'))->with('alert', 'Semua data berhasil dihapus');
    }
}
