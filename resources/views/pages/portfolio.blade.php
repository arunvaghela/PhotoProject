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
                            <h1>Wedding Planner & Event Portfolio</h1>
                            <p>Browse our portfolio of select weddings we've planned in the New York area.</p>
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
                                <p>{!! $val->short_desc !!}</p>
                                <div class="row portfolio-list mb-30">
                                    <div class="col-md-12">
                                        <ul>
                                            <li>Wedding Planner : Rachel Starletta</li>
                                            <li>Photographer : Janet Lewis</li>
                                        </ul>
                                    </div>
                                </div>
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
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/17.jpg"
             data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <div class="testimonials-box">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <span>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                    </span>
                                    <h5>" If you manage to get Samantha as your wedding planner, you are one lucky
                                        couple. We highly recommend! "</h5>
                                    <div class="info">
                                        <div class="cont">
                                            <h6>Emily & Enrico <i>|</i> <span><a href="portfolio-page.html">View the wedding</a></span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                    </span>
                                    <h5>" If you manage to get Duru as your wedding planner, you are one lucky couple.
                                        We highly recommend! "</h5>
                                    <div class="info">
                                        <div class="cont">
                                            <h6>Cynthia & Carl <i>|</i> <span><a href="portfolio-page.html">View the wedding</a></span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                    </span>
                                    <h5>" If you manage to get Duru as your wedding planner, you are one lucky couple.
                                        We highly recommend! "</h5>
                                    <div class="info">
                                        <div class="cont">
                                            <h6>Lauren & Wayne <i>|</i> <span><a href="portfolio-page.html">View the wedding</a></span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Wedding Dates -->
    <section class="section-padding bg-green">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-subtitle white">Dateline</div>
                    <div class="section-title white">Wedding <span class="white">Dates</span></div>
                    <p class="white">Your at-a-glance guide to where I stand on all the truly important things. Wedding
                        elit miss the eget the solin miss citudino selus rutrum in miss vestibulum eleifen ornare
                        torto.</p>
                    <div class="butn-light mt-15 mb-30"><a href="contact.html"><span>Get in touch</span></a></div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <table class="wedding-date-table">
                        <tbody>
                        <tr>
                            <td>
                                <h6>1. Switzerland<br><span>{September : 2024}</span></h6>
                            </td>
                            <td>
                                <p>florya</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>2. Italy<br><span>{October : 2024}</span></h6>
                            </td>
                            <td>
                                <p>Rome</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>3. Amsterdam<br><span>{November : 2024}</span></h6>
                            </td>
                            <td>
                                <p>Netherlands</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>4. Spain<br><span>{December : 2024}</span></h6>
                            </td>
                            <td>
                                <p>Barcelona</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
