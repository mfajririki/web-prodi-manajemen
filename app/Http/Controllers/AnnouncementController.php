<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Document;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $announcements  = Announcement::latest()->get();
        $documents = Document::all();

        return view('admin.announcement.index', compact('announcements', 'documents'));
    }

    public function create()
    {
        return view('admin.announcement.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        $request->validate([
            'title'     => 'required|string|unique:announcements',
        ]);

        DB::transaction(function () use ($request) {
            $file = $request->file('photo');
            if ($file) {
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('images/');
                $file->move($destinationPath, $image_name);
            }

            $announcement = Announcement::create([
                'title'          => $request->title,
                'category'       => $request->category,
                'content'        => request('content') ? $request->content : null,
                'photo'          => request('photo') ? "images/" . $image_name : null,
                'slug'           => Str::slug($request->title, '-'),
            ]);

            if ($request->hasfile('files')) {
                foreach ($request->file('files') as $key => $file) {
                    $path = public_path('document/');
                    $name = $file->getClientOriginalName();
                    $document = random_int(100000, 999999) . time() . '.' . $file->getClientOriginalExtension();
                    $file->move($path, $document);

                    $insert[$key]['announcement_id'] = $announcement->id;
                    $insert[$key]['name'] = $name;
                    $insert[$key]['document'] = 'document/' . $document;
                }

                Document::insert($insert);
            }
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('announcement.index'))->with('alert', 'Pengumuman berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Announcement $announcement)
    {
        $documents = Document::where('announcement_id', $announcement->id)->get();

        return view('admin.announcement.edit', compact('announcement', 'documents'));
    }

    public function update($id, Request $request)
    {
        $file = $request->file('photo');
        if ($file) {
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/');
            $file->move($destinationPath, $image_name);
        }

        $announcement = Announcement::where('id', $id)
            ->update([
                'title'          => $request->title,
                'category'      => $request->category,
                'content'        => request('content') ? $request->content : null,
                'photo'          => request('photo') ? "images/" . $image_name : $request->old,
                'slug'           => Str::slug($request->title, '-'),
            ]);

        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $path = public_path('document/');
                $name = $file->getClientOriginalName();
                $document = random_int(100000, 999999) . time() . '.' . $file->getClientOriginalExtension();
                $file->move($path, $document);

                $insert[$key]['announcement_id'] = $id;
                $insert[$key]['name'] = $name;
                $insert[$key]['document'] = 'document/' . $document;
            }

            Document::insert($insert);
        }

        return redirect(route('announcement.index'))->with('alert', 'Pengumuman berhasil diupdate!');
    }

    public function destroy(Announcement $announcement)
    {
        if (file_exists($announcement->photo)) {
            unlink($announcement->photo);
        }

        foreach ($announcement->documents as $document) {
            unlink($document->document);
        }

        $announcement->delete();

        return redirect(route('announcement.index'))->with('alert', 'Pengumuman berhasil dihapus!');
    }

    public function delete_doc($id)
    {
        $document = Document::where('id', $id);
        $document_str = Document::where('id', $id)->get();

        if (file_exists($document_str[0]->document)) {
            unlink($document_str[0]->document);
        }
        $document->delete();

        return back()->with('alert', 'Dokumen berhasil dihapus!');
    }
}
