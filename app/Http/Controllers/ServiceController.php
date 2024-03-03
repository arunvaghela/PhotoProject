<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use File;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'active' => 'required',
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'desc_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $imageSliderName = time().'slider.'.$request->slider_image->extension();
        $request->slider_image->move(public_path('images/service'), $imageSliderName);

        $imageDescName = time().'desc.'.$request->desc_image->extension();
        $request->desc_image->move(public_path('images/service'), $imageDescName);

        Service::create([
            'name' => $request->name,
            'is_active' => $request->active,
            'slider_img' => $imageSliderName,
            'desc_img' => $imageDescName,
            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,
        ]);

        return redirect()->route('admin.services')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $services = Service::findOrFail($id);
        return view('admin.services.edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'active' => 'required',
            'slider_image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'desc_image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $services = Service::findOrFail($id);

        $services->is_active = $request->active;
        $services->name = $request->name;
        $services->short_desc = $request->short_desc;
        $services->long_desc = $request->long_desc;

        if ($request->hasFile('slider_image')) {
            // Upload and update image
            $imageSliderName = time().'slider.'.$request->slider_image->extension();
            $request->slider_image->move(public_path('images/service'), $imageSliderName);
            $services->slider_img = $imageSliderName;
        }

        if ($request->hasFile('desc_image')) {
            // Upload and update image
            $imageDescName = time().'desc.'.$request->desc_image->extension();
            $request->desc_image->move(public_path('images/service'), $imageDescName);
            $services->desc_img = $imageDescName;
        }

        $services->save();

        return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $slides = Service::findOrFail($id);

        // Delete the associated image file
        if (File::exists(public_path('images/service/' . $slides->slider_img))) {
            File::delete(public_path('images/service/' . $slides->slider_img));
        }

        if (File::exists(public_path('images/service/' . $slides->desc_img))) {
            File::delete(public_path('images/service/' . $slides->desc_img));
        }

        $slides->delete();

        return redirect()->route('admin.services')->with('success', 'Service deleted successfully.');
    }
}
