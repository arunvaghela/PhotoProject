@extends('layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="{{asset('assets/img/about2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-5 slider-text js-fullheight">
                    <div class="slider-text-inner">
                        <div class="desc">
                            <h1>Areion Productions</h1>
                            {{--<p>I am Samantha, wedding planner for colorful couples, a hopeless romantic who loves bold
                                statements.</p>--}}
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
    <!-- About -->
    <section class="about2 cover section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">About Us</div>
                    <div class="section-title">Areion <span>Productions</span></div>
                    <p>Providing luxurious corporate events and providing affordable premium event planning, photography, and videography services are our areas of expertise at Areion Productions. Our specialty is creating unforgettable events that your guests won't soon forget. Our committed crew goes above and beyond to make sure your event is stress-free and unforgettable.</p>
                    <p>At Areion Productions, we firmly think that every occasion, no matter how big or small, deserves a special touch. Whether it's a formal corporate event or a small-scale get-together, we work directly with you to fully realize your idea. We guarantee that every aspect of your event will be done smoothly and without putting undue burden on you thanks to our creative flare, thorough attention to detail, and excellent service.</p>
                    <p>Discover comprehensive information about our outstanding event photography and videography services by exploring our website. Whether you need stunning visuals for your event, whether it's photography or videography, we've got you covered.
                        At Areion Productions, we're deeply passionate about capturing the essence and magic of every occasion. Our skilled team of photographers and videographers is committed to immortalizing your special moments in the most captivating and artistic manner possible. From candid shots to expertly edited videos, we aim to deliver exceptional quality that leaves a lasting impression.</p>
                    <p>Reach out to us today to schedule a consultation and let us assist you in planning your unforgettable event with our remarkable event photography and videography services. Allow us to collaborate with you in creating cherished memories that will be treasured for a lifetime.</p>
                   <hr class="border">

                </div>
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="img-exp">
                        <div class="about-img">
                            <div class="img"><img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt=""></div>
                        </div>
                        <div id="circle">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px"
                                 viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath"
                                          d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
                                </defs>
                                <circle cx="150" cy="100" r="75" fill="none"/>
                                <g>
                                    <use xlink:href="#circlePath" fill="none"/>
                                    <text fill="#575c57">
                                        <textPath xlink:href="#circlePath"> . areion productions . planner</textPath>
                                    </text>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{asset('assets/img/slider/17.jpg')}}"
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

@endsection
