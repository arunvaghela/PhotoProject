@extends('layouts.app')

@section('content')
    @php
        $DescPath = ($services->desc_img != '') ?  asset('images/service/' . $services->desc_img) : asset('images/default/services/service_default.jpg');
        $sliderPath = ($services->slider_img != '') ?  asset('images/service/' . $services->slider_img) : asset('images/default/services/service_slider_default.jpg');
    @endphp
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="{{ $DescPath }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5 slider-text js-fullheight">
                    <div class="slider-text-inner">
                        <div class="desc">
                            <h4>Our Services</h4>
                            <h1>{{ $services->name }}</h1>
                            <p>{!! $services->short_desc !!} </p>
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
    <!-- Services Page -->
    <!-- About Us -->
    <section class="about2 cover section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <p>{!! $services->long_desc !!}</p>
                </div>
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="img-exp">
                        <div class="about-img">
                            <div class="img"><img src="{{ $sliderPath }}" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
