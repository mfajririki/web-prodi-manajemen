<?php

namespace App\Http\Controllers;

use App\Models\LowonganKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowonganKerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $lowongan_kerja  = LowonganKerja::latest()->get();

        return view('admin.lowongan_kerja.index', compact('lowongan_kerja'));
    }

    public function create()
    {
        return view('admin.lowongan_kerja.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $lowongan_kerja = LowonganKerja::create([
                'nama_loker'          => $request->nama_loker,
                'nama_instansi'        => $request->nama_instansi,
                'lokasi'        => $request->lokasi,
                'link'        => $request->link,
                'deadline'        => $request->deadline,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('admin-lowongankerja.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(LowonganKerja $admin_lowongankerja)
    {
        return view('admin.lowongan_kerja.edit', compact('admin_lowongankerja',));
    }

    public function update($id, Request $request)
    {
        $lowongan_kerja = LowonganKerja::where('id', $id)
            ->update([
                'nama_loker'          => $request->nama_loker,
                'nama_instansi'        => $request->nama_instansi,
                'lokasi'        => $request->lokasi,
                'link'        => $request->link,
                'deadline'        => $request->deadline,
            ]);

        return redirect(route('admin-lowongankerja.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(LowonganKerja $admin_lowongankerja)
    {
        if (file_exists($admin_lowongankerja->photo)) {
            unlink($admin_lowongankerja->photo);
        }



        $admin_lowongankerja->delete();

        return redirect(route('admin-lowongankerja.index'))->with('alert', 'Data berhasil dihapus!');
    }
}
