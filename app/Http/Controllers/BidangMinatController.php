<?php

namespace App\Http\Controllers;

use App\Imports\BidangMinatImport;
use App\Models\BidangMinat;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BidangMinatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mk_bidangminat  = BidangMinat::latest()->get();

        return view('admin.bidangminat.index', compact('mk_bidangminat'));
    }

    public function create()
    {
        return view('admin.bidangminat.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $mk_bidangminat = BidangMinat::create([
                'kode_mk'          => $request->kode_mk,
                'nama_mk'        => $request->nama_mk,
                'bidangminat'          => $request->bidangminat,
                'kelompok_mk'          => $request->kelompok_mk,
                'semester'          => $request->semester,
                'sks'          => $request->sks,
                'stream'          => $request->stream,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('bidangminat.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(BidangMinat $bidangminat)
    {
        return view('admin.bidangminat.edit', compact('bidangminat',));
    }

    public function update($id, Request $request)
    {
        $mk_bidangminat = BidangMinat::where('id', $id)
            ->update([
                'kode_mk'          => $request->kode_mk,
                'nama_mk'          => $request->nama_mk,
                'bidangminat'      => $request->bidangminat,
                'kelompok_mk'      => $request->kelompok_mk,
                'semester'         => $request->semester,
                'sks'              => $request->sks,
                'stream'           => $request->stream,
            ]);

        return redirect(route('bidangminat.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(BidangMinat $bidangminat)
    {
        $bidangminat->delete();

        return redirect(route('bidangminat.index'))->with('alert', 'Data berhasil dihapus!');
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
        Excel::import(new BidangMinatImport, public_path('/document/import/' . $nama_file));

        // notifikasi dengan session
        // Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect(route('bidangminat.index'))->with('alert', 'Import berhasil.');
    }

    public function delete_all(BidangMinat $bidangminat)
    {
        $bidangminat->truncate();

        return redirect(route('bidangminat.index'))->with('alert', 'Semua data berhasil dihapus');
    }
}
