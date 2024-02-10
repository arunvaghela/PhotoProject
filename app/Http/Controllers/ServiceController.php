<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        if($services->isNotEmpty() && $services->count() > 3){
            $services->random(3);
        }
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'active' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/service'), $imageName);

        Service::create([
            'is_active' => $request->active,
            'img' => $imageName,
        ]);

        return redirect()->route('admin.services.slider')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $services = Service::findOrFail($id);
        return view('admin.services.edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'active' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slides = Service::findOrFail($id);

        $slides->is_active = $request->active;

        if ($request->hasFile('image')) {
            // Upload and update image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/service'), $imageName);
            $slides->img = $imageName;
        }

        $slides->save();

        return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $slides = Service::findOrFail($id);

        // Delete the associated image file
        if (File::exists(public_path('images/service' . $slides->image))) {
            File::delete(public_path('images/service' . $slides->image));
        }

        $slides->delete();

        return redirect()->route('admin.services')->with('success', 'Service deleted successfully.');
    }
}
