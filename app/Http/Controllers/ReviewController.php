<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        if($reviews->isNotEmpty() && $reviews->count() > 3){
            $reviews->random(3);
        }
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'active' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'rate' => 'required|min:1|max:5'
        ]);

        Review::create([
            'is_active' => $request->active,
            'name' => $request->name,
            'desc' => $request->desc,
            'rate' => $request->rate,
        ]);

        return redirect()->route('admin.reviews')->with('success', 'Reviews created successfully.');
    }

    public function edit($id)
    {
        $reviews = Review::findOrFail($id);
        return view('admin.reviews.edit', compact('reviews'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'active' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'rate' => 'required|min:1|max:5',
        ]);

        $reviews = Review::findOrFail($id);
        $reviews->is_active = $request->active;
        $reviews->name = $request->name;
        $reviews->desc = $request->desc;
        $reviews->rate = $request->rate;
        $reviews->save();

        return redirect()->route('admin.reviews')->with('success', 'Reviews updated successfully.');
    }

    public function destroy($id)
    {
        $reviews = Review::findOrFail($id);
        $reviews->delete();

        return redirect()->route('admin.reviews')->with('success', 'Reviews deleted successfully.');
    }
}
