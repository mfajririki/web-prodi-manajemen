<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class TentangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tentang  = Tentang::latest()->get();

        return view('admin.tentang.index', compact('tentang'));
    }

    public function create()
    {
        return view('admin.tentang.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $tentang = Tentang::create([
                'konten_tentang'          => $request->konten_tentang,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('tentang.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Tentang $tentang)
    {
        return view('admin.tentang.edit', compact('tentang',));
    }

    public function update($id, Request $request)
    {
        $tentang = Tentang::where('id', $id)
            ->update([
                'konten_tentang'          => $request->konten_tentang,
            ]);



        return redirect(route('tentang.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(Tentang $tentang)
    {
        $tentang->delete();

        return redirect(route('tentang.index'))->with('alert', 'Data berhasil dihapus!');
    }
}
