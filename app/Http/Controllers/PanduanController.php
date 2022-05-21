<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class PanduanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $panduan  = Panduan::latest()->get();

        return view('admin.panduan.index', compact('panduan',));
    }

    public function create()
    {
        return view('admin.panduan.create');
    }

    public function store(Request $request)
    {

        DB::transaction(function () use ($request) {
            $document = $request->file('document');
            $nama_document = time() . "_" . $document->getClientOriginalName();
            $tujuan_upload = public_path('document/');
            $document->move($tujuan_upload, $nama_document);

            $panduan = Panduan::create([
                'document' => 'document/' . $nama_document,
                'title'          => $request->title,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('admin-panduan.index'))->with('alert', 'Panduan berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Panduan $panduan)
    {
        return view('admin.panduan.edit', compact('panduan',));
    }

    public function update($id, Request $request)
    {
        if ($request->file('document')) {
            $document = $request->file('document');
            $nama_document = time() . "_" . $document->getClientOriginalName();
            $tujuan_upload = public_path('document/');
            $document->move($tujuan_upload, $nama_document);
        }

        $panduan = Panduan::where('id', $id)
            ->update([
                'document' => request('document') ? "document/" . $nama_document : $request->old,
                'title'          => $request->title,
            ]);

        return redirect(route('admin-panduan.index'))->with('alert', 'Pengumuman berhasil diupdate!');
    }

    public function destroy(Panduan $panduan)
    {
        $panduan->delete();

        return redirect(route('admin-panduan.index'))->with('alert', 'Pengumuman berhasil dihapus!');
    }

    public function hapus_doc($id, Request $request)
    {
        $document = Panduan::where('id', $id);

        $document->update(['document' => null]);

        return back()->with('alert', 'Dokumen berhasil dihapus!');
    }
}
