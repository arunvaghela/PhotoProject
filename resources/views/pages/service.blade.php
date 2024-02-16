@extends('layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="img/slider/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 slider-text js-fullheight">
                    <div class="slider-text-inner">
                        <div class="desc">
                            <h4>What we do</h4>
                            <h1>Our Wedding Planning Services</h1>
                            <p>Professional Wedding & Event Planner surabit aliquet orci elit gene tristisue in lorem
                                dream vitae.</p>
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
                            <div class="position-re o-hidden"><img src="img/services/4.jpg" alt=""></div>
                            <div class="con">
                                <h5><a href="services-page.html">Corporate <span>Events</span></a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col-md-12 text-right">
                                        <div class="permalink"><a href="services-page.html">Explore <i
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
    <!-- Faqs -->
    <section class="section-padding bg-green">
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
    </section>
    <!-- Signup -->
    <section class="signup">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="img left"><img src="img/signup.jpg" alt=""></div>
                </div>
                <div class="col-md-6 p-0 valign">
                    <div class="content">
                        <div class="cont text-left">
                            <h6>Sign Up</h6>
                            <h4>Subscribe to the <span>Newsletter</span></h4>
                            <p>For the latest inspiration and insider tips straight to your inbox.</p>
                            <form method="post" class="contact__form"
                                  action="https://duruthemes.com/demo/html/florya/light/mail.php">
                                <!-- form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none"
                                             role="alert"> Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>
                                <!-- form elements -->
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input name="name" type="text" placeholder="Full Name *" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input name="email" type="email" placeholder="Email Address *" required>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="butn-dark"><span>Subscripe</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/4.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/5.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
