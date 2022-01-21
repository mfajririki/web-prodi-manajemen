<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class VisiMisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $visi_misi  = VisiMisi::latest()->get();

        return view('admin.visi_misi.index', compact('visi_misi'));
    }

    public function create()
    {
        return view('admin.visi_misi.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $visi_misi = VisiMisi::create([
                'visi'          => $request->visi,
                'misi'        => $request->misi,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('visi_misi.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(VisiMisi $visi_misi)
    {
        return view('admin.visi_misi.edit', compact('visi_misi',));
    }

    public function update($id, Request $request)
    {
        $visi_misi = VisiMisi::where('id', $id)
            ->update([
                'visi'          => $request->visi,
                'misi'          => $request->misi,
            ]);



        return redirect(route('visi_misi.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(VisiMisi $visi_misi)
    {
        if (file_exists($visi_misi->photo)) {
            unlink($visi_misi->photo);
        }



        $visi_misi->delete();

        return redirect(route('visi_misi.index'))->with('alert', 'Data berhasil dihapus!');
    }
}
