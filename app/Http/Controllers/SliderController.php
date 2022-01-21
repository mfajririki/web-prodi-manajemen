<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders  = Slider::get();

        return view('admin.slider.index', compact('sliders',));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $file = $request->file('photo');
            if ($file) {
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('images/slider/');
                $file->move($destinationPath, $image_name);
            }

            $slider = Slider::create([
                'nama'          => $request->nama,
                'photo'          => request('photo') ? "images/slider/" . $image_name : null,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('slider.index'))->with('alert', 'Slider berhasil ditambah!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider',));
    }

    public function update($id, Request $request)
    {
        $file = $request->file('photo');
        if ($file) {
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/slider/');
            $file->move($destinationPath, $image_name);
        }

        $slider = Slider::where('id', $id)
            ->update([
                'nama'          => $request->nama,
                'photo'          => request('photo') ? "images/slider/" . $image_name : $request->old,
            ]);

        return redirect(route('slider.index'))->with('alert', 'Slider berhasil diupdate!');
    }

    public function destroy(Slider $slider)
    {
        if (file_exists($slider->photo)) {
            unlink($slider->photo);
        }

        $slider->delete();

        return redirect(route('slider.index'))->with('alert', 'Slider berhasil dihapus!');
    }
}
