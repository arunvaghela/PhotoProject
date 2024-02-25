@extends('layouts.app')

@section('content')
    @php
        $slideImage = ($portfolios->slide_img != '') ?  asset('images/portfolio/' . $portfolios->slide_img) : asset('images/default/services/service_default.jpg');
        /*$sliderPath = ($portfolios->slider_img != '') ?  asset('images/portfolio/' . $portfolios->slider_img) : asset('images/default/services/service_slider_default.jpg');*/
    @endphp
    <!-- Header Banner -->
    <div class="banner-header2 section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="{{$slideImage}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h6>Image & Video</h6>
                    <h1>Image <span> Gallery</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Isotope/Masonry Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row florya-gallery-items">
                @forelse($portfolioImages as $pkey => $pval)
                    <div class="col-md-4 florya-masonry-wrapper single-item couples">
                        <a href="{{ asset('images/gallery/' . $pval->name) }}" title="" class="item-img-link img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="{{ asset('images/gallery/' . $pval->name) }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div>
                        No Images Found!
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Promo Video -->
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="4"
             data-background="{{asset('assets/img/slider/15.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="section-subtitle"><span>Be Inspired</span></div>
                    <div class="section-title white">Latest wedding <span>Video</span></div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                    <a class="vid" href="{{ $portfolios->home_Video_link }}">
                        <div class="vid-butn"> <span class="icon">
                                <i class="ti-control-play"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Gallery -->
    <section class="section-padding bg-green">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="section-subtitle white">Popup</div>
                    <div class="section-title white">Video <span class="white">Gallery</span></div>
                </div>
            @forelse($portfolioVideos as $vkey => $vval)
                <!-- 2 columns -->
                    @php
                        $video_id = substr(parse_url($vval->name, PHP_URL_PATH), 1);

                        // Construct the thumbnail URL
                        $thumbnail_url = "https://i3.ytimg.com/vi/".$video_id."/maxresdefault.jpg";
                    @endphp
                    @if(in_array($vkey, [0,1]))
                        <div class="col-md-6">
                            <div class="vid-area mb-30">
                                <div class="vid-icon"><img src="{{ $thumbnail_url }}" alt="YouTube">
                                    <a class="video-gallery-button vid" href="{{$vval->name}}">
                                        <span class="video-gallery-polygon">
                                            <i class="ti-control-play"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @elseif(in_array($vkey, [2,3,4]))
                    <!-- 3 columns -->
                        <div class="col-md-4">
                            <div class="vid-area mb-30">
                                <div class="vid-icon"><img src="{{ $thumbnail_url }}" alt="YouTube">
                                    <a class="video-gallery-button vid" href="{{$vval->name}}">
                                        <span class="video-gallery-polygon">
                                            <i class="ti-control-play"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div>
                        No Videos Found!
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
