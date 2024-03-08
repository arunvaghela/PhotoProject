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
                            <h4>Portfolio</h4>
                            <h1>Events Portfolio</h1>
                            <p>Browse our portfolio of select EVENTS we've planned in the all area.</p>
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
    <!-- Portfolio -->
    <section class="portfolio section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="section-subtitle">Works</div>
                    <div class="section-title">Our <span>Portfolio</span></div>
                </div>
            </div>
            <div class="row">
                @forelse($allPortfolios as $key => $val)
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="{{ asset('images/portfolio/' . $val->home_img) }}">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>{{ ucfirst(substr($val->first_name, 0, 1)) }}
                                        & {{ ucfirst(substr($val->last_name, 0, 1)) }}</h4>
{{--                                    <h6>Level Park, Oxfordshire</h6>--}}
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-green">
                            <div class="square-container2">
                                <h4>{{ ucfirst($val->first_name) }} & {{ ucfirst($val->last_name) }}</h4>
{{--                                <p>{!! $val->short_desc !!}</p>--}}

                                <div class="btn-line"><a href="{{ route('portfolio', $val->id) }}">Find out more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div>
                        No Portfolios Found!
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection
