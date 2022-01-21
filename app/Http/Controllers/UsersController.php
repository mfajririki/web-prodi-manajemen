<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users  = Users::get();

        return view('admin.user.index', compact('users',));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name'     => 'required|max:255|string',
        //     'email'     => 'required|max:255|string|email',
        //     'password' => 'required|string|min:8',
        // ]);

        DB::transaction(function () use ($request) {
            $user = Users::create([
                'name'          => $request->name,
                'email'       => $request->email,
                'password'       => Hash::make($request->pasword),
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('user.index'))->with('alert', 'User berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Users $user)
    {
        return view('admin.user.edit', compact('user',));
    }

    public function update($id, Request $request)
    {
        $user = Users::where('id', $id)
            ->update([
                'name'          => $request->name,
                'email'      => $request->email,
                'password'       => Hash::make($request->password),
            ]);

        return redirect(route('user.index'))->with('alert', 'User berhasil diupdate!');
    }

    public function destroy(Users $user)
    {
        $user->delete();

        return redirect(route('user.index'))->with('alert', 'User berhasil dihapus!');
    }
}
