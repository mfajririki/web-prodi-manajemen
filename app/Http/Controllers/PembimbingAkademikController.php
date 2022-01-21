<?php

namespace App\Http\Controllers;

use App\Models\PembimbingAkademik;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class PembimbingAkademikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pembimbing_akademik  = PembimbingAkademik::latest()->get();

        return view('admin.pembimbing_akademik.index', compact('pembimbing_akademik',));
    }

    public function create()
    {
        return view('admin.pembimbing_akademik.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $this->validate($request, [
        //     'document' => 'required|file|mimes:docx,doc,pdf,xlsx|max:2048',
        //     'title' => 'required',
        // ]);

        DB::transaction(function () use ($request) {
            $document = $request->file('document');
            $nama_document = time() . "_" . $document->getClientOriginalName();
            $tujuan_upload = public_path('document/');
            $document->move($tujuan_upload, $nama_document);

            $pembimbing_akademik = PembimbingAkademik::create([
                'document' => 'document/' . $nama_document,
                'title'          => $request->title,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('pembimbing_akademik.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(PembimbingAkademik $pembimbing_akademik)
    {
        return view('admin.pembimbing_akademik.edit', compact('pembimbing_akademik',));
    }

    public function update($id, Request $request)
    {
        // $this->validate($request, [
        //     'document' => 'required|file|mimes:docx,doc,pdf,xlsx|max:2048',
        //     'title' => 'required',
        // ]);

        $document = $request->file('document');
        $nama_document = time() . "_" . $document->getClientOriginalName();
        $tujuan_upload = public_path('document/');
        $document->move($tujuan_upload, $nama_document);

        $pembimbing_akademik = PembimbingAkademik::where('id', $id)
            ->update([
                'document' => 'document/' . $nama_document,
                'title'          => $request->title,
            ]);

        return redirect(route('pembimbing_akademik.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(PembimbingAkademik $pembimbing_akademik)
    {
        $pembimbing_akademik->delete();

        return redirect(route('pembimbing_akademik.index'))->with('alert', 'Data berhasil dihapus!');
    }

    public function hapus_doc($id, Request $request)
    {
        $document = PembimbingAkademik::where('id', $id);

        $document->update(['document' => null]);

        return back()->with('alert', 'Dokumen berhasil dihapus!');
    }
}
