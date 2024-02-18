<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioType;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $slides = Slider::all();
        if($slides->isNotEmpty() && $slides->count() > 3){
            $slides->random(3);
        }

        $img1 = isset($slides[0]->img) ? asset('images/slider/' . $slides[0]->img) : asset('images/default/1.jpg');
        $img2 = isset($slides[1]->img) ? asset('images/slider/' . $slides[1]->img) : asset('images/default/1.jpg');
        $img3 = isset($slides[2]->img) ? asset('images/slider/' . $slides[2]->img) : asset('images/default/1.jpg');

        $services = Service::all();

        $portfolio = Portfolio::all();
        if($portfolio->isNotEmpty() && $portfolio->count() > 6){
            $portfolio->random(6);
        }

        return view('home', compact('img1', 'img2', 'img3', 'services', 'portfolio'));
    }

    public function about()
    {
        return view('pages.about');
    }
    public function service()
    {
        $allServices = Service::all();
        return view('pages.service', compact('allServices'));
    }

    public function services($id)
    {
        $services = Service::findOrFail($id);
        $allServices = Service::all();
        return view('services', compact('services', 'allServices'));
    }

    public function portfolios($id)
    {
        $portfolios = Portfolio::findOrFail($id);
        $portfolioImages = PortfolioType::where(['p_id' => $id, 'type' => 'I'])->get();
        $portfolioVideos = PortfolioType::where(['p_id' => $id, 'type' => 'V'])->get();
        return view('portfolios', compact('portfolios', 'portfolioImages', 'portfolioVideos'));
    }

    public function portfolio()
    {
        $allPortfolios = Portfolio::all();
        return view('pages.portfolio', compact('allPortfolios'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
