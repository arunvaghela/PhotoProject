@extends('layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="{{asset('assets/img/slider/1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-5 slider-text js-fullheight">
                    <div class="slider-text-inner">
                        <div class="desc">
                            <h4>What we do</h4>
                            <h1>Our Wedding Planning Services</h1>
                            <p>Experienced Wedding & Event Planner excels in crafting unforgettable dream occasions with impeccable attention to detail.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </div>
    <!-- Services -->
    <section class="services section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                @forelse($allServices as $key => $value)
                    <div class="col-md-4">
                        <div class="item">
                            <div class="position-re o-hidden"><img src="{{asset('images/service/' . $value->slider_img)}}" alt=""></div>
                            <div class="con">
                                <h5><a href="{{ route('service', $value->id) }}">{{ $value->name }}</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col-md-12 text-right">
                                        <div class="permalink">
                                            <a href="{{ route('service', $value->id) }}">Explore
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-4">
                        <div class="item">
                            <div class="position-re o-hidden"><img src="{{asset('assets/img/services/4.jpg')}}" alt=""></div>
                            <div class="con">
                                <h5><a href="/">Corporate <span>Events</span></a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col-md-12 text-right">
                                        <div class="permalink"><a href="/">Explore <i
                                                    class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection
