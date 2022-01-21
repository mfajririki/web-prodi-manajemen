<?php

namespace App\Http\Controllers;

use App\Models\Tujuans;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class TujuansController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tujuan  = Tujuans::latest()->get();

        return view('admin.tujuans.index', compact('tujuan'));
    }

    public function create()
    {
        return view('admin.tujuans.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $konten_tujuan = Tujuans::create([
                'konten_tujuan'          => $request->konten_tujuan,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('tujuans.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Tujuans $tujuan)
    {
        return view('admin.tujuans.edit', compact('tujuan',));
    }

    public function update($id, Request $request)
    {
        $tujuan = Tujuans::where('id', $id)
            ->update([
                'konten_tujuan'          => $request->konten_tujuan,
            ]);



        return redirect(route('tujuans.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(Tujuans $tujuan)
    {
        $tujuan->delete();

        return redirect(route('tujuans.index'))->with('alert', 'Data berhasil dihapus!');
    }
}
