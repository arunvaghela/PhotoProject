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
    <section class="services section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft"><img
                        src="{{ $sliderPath }}" class="img-fluid mb-30" alt=""></div>
                <div class="col-md-7 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    {!! $services->long_desc !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Faqs -->
    {{--<section class="section-padding bg-green">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="section-subtitle white">F.A.Qs</div>
                    <div class="section-title white">Wedding <span class="white">Questions</span></div>
                    <p class="white">Questions aliquet orci elit gene tristique in lorem dream vitae. Aliquam
                        tincidunten felis sed gravida aliquam neque libero hendrerit mana the amentane the mollis lacus
                        quam maurisine erase.</p>
                    <p class="white">Wedding inilla duiman at elit finibus viverra nec a lacus in the nesuzin senenoice
                        misuscit non sesue the aucan volus.</p>
                </div>
                <div class="col-md-6">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">How do I plan a wedding in three months?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem
                                        alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas
                                        the amentane the mollis erase.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Do we need a wedding planner?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem
                                        alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas
                                        the amentane the mollis erase.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">How should you deal with wedding stress?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem
                                        alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas
                                        the amentane the mollis erase.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">How do you plan a destination wedding?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem
                                        alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas
                                        the amentane the mollis erase.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">What stationery do I need for my wedding?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem
                                        alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas
                                        the amentane the mollis erase.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Other Services -->
    {{--<section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30">
                    <div class="section-subtitle">The Explore</div>
                    <div class="section-title">Other <span>Services</span></div>
                </div>
                <div class="col-md-7 mb-30">
                    <p>Professional Wedding & Event Planner surabit aliquet orci elit gene tristisue in lorem dream
                        vitae alisuam tincidunt felis sed gravida aliquam nemue libero hendrerit magna sit amenta the
                        mollis lacus huam maurisine alisuam erat volutfat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @forelse($allServices as $key => $value)
                            <div class="item">
                                <div class="position-re o-hidden"><img src="{{asset('images/service/' . $value->slider_img)}}" alt="">
                                </div>
                                <div class="con">
                                    <h5><a href="{{ route('service', $value->id) }}">{{ $value->name }}</a></h5>
                                    <div class="line"></div>
                                    <div class="row facilities">
                                        <div class="col-md-12 text-right">
                                            <div class="permalink"><a href="{{ route('service', $value->id) }}">Explore <i class="ti-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="item">
                                <div class="position-re o-hidden"><img src="{{url('assets/img/services/1.jpg')}}" alt="">
                                </div>
                                <div class="con">
                                    <h5><a href="javascript:void(0)">Wedding <span>Planner</span></a></h5>
                                    <div class="line"></div>
                                    <div class="row facilities">
                                        <div class="col-md-12 text-right">
                                            <div class="permalink"><a href="javascript:void(0)">Explore <i class="ti-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
@endsection
