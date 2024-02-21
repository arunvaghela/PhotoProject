<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioType;
use Illuminate\Http\Request;
use File;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolio'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'short_desc' => 'required',
            'active' => 'required',
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'home_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'youtube_link' => 'required',
            'youtube_link1' => 'required',
        ]);

        $imageSliderName = time() . 'slider.' . $request->slider_image->extension();
        $request->slider_image->move(public_path('images/portfolio'), $imageSliderName);

        $imageHomeName = time() . 'home.' . $request->home_image->extension();
        $request->home_image->move(public_path('images/portfolio'), $imageHomeName);

        $portfolio = Portfolio::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'is_active' => $request->active,
            'slide_img' => $imageSliderName,
            'home_img' => $imageHomeName,
            'short_desc' => $request->short_desc
        ]);

        if ($request->hasFile('gallery_image')) {
            $files = $request->file('gallery_image');
            $i = 0;
            foreach ($files as $file) {
                $imageGalleryName = time() . $i . 'gallery.' . $file->extension();
                $file->move(public_path('images/gallery'), $imageGalleryName);
                PortfolioType::create([
                    'p_id' => $portfolio->id,
                    'name' => $imageGalleryName,
                    'type' => 'I'
                ]);
                $i++;
            }
        }

        for ($j = 0; $j <= 4; $j++) {
            $fieldName = ($j == 0) ? "youtube_link" : "youtube_link$j";
            if ($request->filled($fieldName)) {
                PortfolioType::create([
                    'p_id' => $portfolio->id,
                    'name' => $request->$fieldName,
                    'type' => 'V',
                    'youtube_link_count' => $j,
                ]);
            }
        }

        return redirect()->route('admin.portfolio')->with('success', 'Portfolio created successfully.');
    }

    public function edit($id)
    {
        $portfolios = Portfolio::findOrFail($id);
        $portfolioImages = PortfolioType::where('p_id', $id)->where('type', 'I')->get();
        $portfolioVideos = PortfolioType::where('p_id', $id)->where('type', 'V')->orderBy('youtube_link_count', 'asc')->get();
        return view('admin.portfolio.edit', compact('portfolios', 'portfolioImages', 'portfolioVideos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'short_desc' => 'required',
            'active' => 'required',
            'slider_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'home_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'youtube_link' => 'required',
            'youtube_link1' => 'required',
        ]);

        $portfolios = Portfolio::findOrFail($id);

        if ($request->hasFile('slider_image')) {
            $imageSliderName = time() . 'slider.' . $request->slider_image->extension();
            $request->slider_image->move(public_path('images/portfolio'), $imageSliderName);
            $portfolios->slide_img = $imageSliderName;
        }

        if ($request->hasFile('home_image')) {
            $imageHomeName = time() . 'home.' . $request->home_image->extension();
            $request->home_image->move(public_path('images/portfolio'), $imageHomeName);
            $portfolios->home_img = $imageHomeName;
        }
        $portfolios->first_name = $request->first_name;
        $portfolios->last_name = $request->last_name;
        $portfolios->is_active = $request->active;
        $portfolios->short_desc = $request->short_desc;

        $portfolios->save();

        if ($request->hasFile('gallery_image')) {
            $files = $request->file('gallery_image');
            $i = 0;
            foreach ($files as $file) {
                $imageGalleryName = time() . $i . 'gallery.' . $file->extension();
                $file->move(public_path('images/gallery'), $imageGalleryName);
                PortfolioType::create([
                    'p_id' => $id,
                    'name' => $imageGalleryName,
                    'type' => 'I'
                ]);
                $i++;
            }
        }

        for ($j = 0; $j <= 4; $j++) {
            $fieldName = ($j == 0) ? "youtube_link" : "youtube_link$j";
            if ($request->filled($fieldName)) {
                PortfolioType::updateOrCreate(
                    [
                        'p_id' => $id,
                        'youtube_link_count' => $j,
                        'type' => 'V',
                    ],
                    [
                        'p_id' => $id,
                        'name' => $request->$fieldName,
                        'youtube_link_count' => $j,
                        'type' => 'V',
                    ]);
            }
        }

        return redirect()->route('admin.portfolio')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy($id)
    {
        $portfolios = Portfolio::findOrFail($id);

        // Delete the associated image file

        if (File::exists(public_path('images/portfolio/' . $portfolios->home_img))) {
            File::delete(public_path('images/portfolio/' . $portfolios->home_img));
        }

        if (File::exists(public_path('images/portfolio/' . $portfolios->slide_img))) {
            File::delete(public_path('images/portfolio/' . $portfolios->slide_img));
        }

        $portfolioImages = PortfolioType::where(['p_id' => $id, 'type' => 'V'])->get();

        foreach ($portfolioImages as $key => $val) {
            if (File::exists(public_path('images/gallery/' . $val->name))) {
                File::delete(public_path('images/gallery/' . $val->name));
            }
        }
        PortfolioType::where(['p_id' => $id])->delete();
        $portfolios->delete();

        return redirect()->route('admin.portfolio')->with('success', 'Portfolio deleted successfully.');
    }
}
