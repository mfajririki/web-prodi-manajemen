<?php

namespace App\Http\Controllers;

use App\Models\Iabee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IabeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $iabee  = Iabee::latest()->get();

        return view('admin.iabee.index', compact('iabee'));
    }

    public function create()
    {
        return view('admin.iabee.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $iabee = Iabee::create([
                'konten'          => $request->konten,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('admin-iabee.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Iabee $iabee)
    {
        return view('admin.iabee.edit', compact('iabee',));
    }

    public function update($id, Request $request)
    {
        $iabee = Iabee::where('id', $id)
            ->update([
                'konten'          => $request->konten,
            ]);

        return redirect(route('admin-iabee.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(Iabee $iabee)
    {
        $iabee->delete();

        return redirect(route('admin-iabee.index'))->with('alert', 'Data berhasil dihapus!');
    }
}
