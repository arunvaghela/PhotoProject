<?php

namespace App\Http\Controllers;

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



        return view('home', compact('img1', 'img2', 'img3'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
