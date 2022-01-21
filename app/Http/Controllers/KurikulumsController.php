<?php

namespace App\Http\Controllers;

use App\Models\Kurikulums;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class KurikulumsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kurikulum  = Kurikulums::latest()->get();

        return view('admin.kurikulums.index', compact('kurikulum'));
    }

    public function create()
    {
        return view('admin.kurikulums.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $this->validate($request, [
        //     'document' => 'required|file|mimes:docx,doc,pdf,xlsx|max:2048',
        // ]);

        DB::transaction(function () use ($request) {
            if ($request->hasfile('document')) {
                $document = $request->file('document');
                $nama_document = time() . "_" . $document->getClientOriginalName();
                $tujuan_upload = public_path('document/');
                $document->move($tujuan_upload, $nama_document);
            }

            $kurikulum = Kurikulums::create([
                'kode_mk'           => $request->kode_mk,
                'nama_mk'           => $request->nama_mk,
                'kelompok_mk'       => $request->kelompok_mk,
                'sks'               => $request->sks,
                'semester'          => $request->semester,
                'document'          => request('document') ? 'document/' . $nama_document : null,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('kurikulums.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Kurikulums $kurikulum)
    {
        return view('admin.kurikulums.edit', compact('kurikulum',));
    }

    public function update($id, Request $request)
    {
        // $this->validate($request, [
        //     'document' => 'required|file|mimes:docx,doc,pdf,xlsx|max:2048',
        // ]);

        if ($request->hasfile('document')) {
            $document = $request->file('document');
            $nama_document = time() . "_" . $document->getClientOriginalName();
            $tujuan_upload = public_path('document/');
            $document->move($tujuan_upload, $nama_document);
        }

        $kurikulum = Kurikulums::where('id', $id)
            ->update([
                'kode_mk'           => $request->kode_mk,
                'nama_mk'           => $request->nama_mk,
                'kelompok_mk'       => $request->kelompok_mk,
                'sks'               => $request->sks,
                'semester'          => $request->semester,
                'document'          => request('document') ? 'document/' . $nama_document : null,
            ]);

        return redirect(route('kurikulums.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(Kurikulums $kurikulum)
    {
        $kurikulum->delete();

        return redirect(route('kurikulums.index'))->with('alert', 'Data berhasil dihapus!');
    }

    public function hapus_doc($id, Request $request)
    {
        $document = Kurikulums::where('id', $id);

        $document->update(['document' => null]);

        return back()->with('alert', 'Dokumen berhasil dihapus!');
    }
}
