<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use File;

class SliderController extends Controller
{
    public function index()
    {
        $slides = Slider::all();
        if($slides->isNotEmpty() && $slides->count() > 3){
            $slides->random(3);
        }
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'active' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/slider'), $imageName);

        Slider::create([
            'is_active' => $request->active,
            'img' => $imageName,
        ]);

        return redirect()->route('admin.slider')->with('success', 'Slider created successfully.');
    }

    public function edit($id)
    {
        $slides = Slider::findOrFail($id);
        return view('admin.slides.edit', compact('slides'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'active' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slides = Slider::findOrFail($id);

        $slides->is_active = $request->active;

        if ($request->hasFile('image')) {
            // Upload and update image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/slider'), $imageName);
            $slides->img = $imageName;
        }

        $slides->save();

        return redirect()->route('admin.slider')->with('success', 'Slider updated successfully.');
    }

    public function destroy($id)
    {
        $slides = Slider::findOrFail($id);

        // Delete the associated image file
        if (File::exists(public_path('images/slider' . $slides->image))) {
            File::delete(public_path('images/slider' . $slides->image));
        }

        $slides->delete();

        return redirect()->route('admin.slider')->with('success', 'Slides deleted successfully.');
    }
}
