@extends('layouts.app')

@section('content')
    <!-- Kenburns Slider -->
    <aside class="kenburns-section" id="kenburnsSliderContainer" data-overlay-dark="3">
        <div class="kenburns-inner h-100">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row h-100">
                        <div class="col-md-6 slider-text js-fullheight">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h4>AREION PRODUCTIONS</h4>
                                    <h1>Wedding & Event Planner For Colorful Couples</h1>
                                    <p>We love the opportunity to get together and discuss how we can make your dream
                                        wedding a reality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- About Areion Productions -->
    <section class="about section-padding bg-green">
        <div class="container">
            <div class="row">
                <div class="col-md-5 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle white">What we do</div>
                    <div class="section-title white">A wedding that is <span class="white">True</span> as you are!</div>
                    {{--<p>We would love to meet up and chat about how we can make your dream wedding happen! Nullam
                        vestibulum iaculis maximus. International facilisis leo at ac tristique nunc vulputate.</p>--}}
                </div>
                <div class="col-md-6 offset-md-1 mt-30 animate-box" data-animate-effect="fadeInUp">
                    <p>Providing luxurious corporate events and providing affordable premium event planning,
                        photography, and videography services are our areas of expertise at Areion Productions. Our
                        specialty is creating unforgettable events that your guests won't soon forget. Our committed
                        crew goes above and beyond to make sure your event is stress-free and unforgettable.</p>
                    <div class="butn-light mt-15"><a href="{{ url('/about') }}"><span>Find out more</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30">
                    <div class="section-subtitle">The experience</div>
                    <div class="section-title">Explore <span>Services</span></div>
                </div>
                <div class="col-md-7 mb-30">
                    <p>As a professional Wedding and Event Planner, I specialize in creating memorable experiences. With
                        a great eye for detail and a desire for perfection, I make fantasies a reality. Lorem, dolor sit
                        amet, consectetur adipiscing elit. Cras tristique lorem vitae consectetur. Sed gravida aliquam
                        libero, hendrerit magna. Duis lacus quis mauris aliquam, sed erat volutpat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @forelse($services as $key => $value)
                            <div class="item">
                                <div class="position-re o-hidden"><img
                                        src="{{asset('images/service/' . $value->slider_img)}}" alt="">
                                </div>
                                <div class="con">
                                    <h5><a href="{{ route('service', $value->id) }}">{{ $value->name }}</a></h5>
                                    <div class="line"></div>
                                    <div class="row facilities">
                                        <div class="col-md-12 text-right">
                                            <div class="permalink"><a href="{{ route('service', $value->id) }}">Explore
                                                    <i class="ti-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="item">
                                <div class="position-re o-hidden"><img src="{{url('assets/img/services/1.jpg')}}"
                                                                       alt="">
                                </div>
                                <div class="con">
                                    <h5><a href="javascript:void(0)">Wedding <span>Planner</span></a></h5>
                                    <div class="line"></div>
                                    <div class="row facilities">
                                        <div class="col-md-12 text-right">
                                            <div class="permalink"><a href="javascript:void(0)">Explore <i
                                                        class="ti-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0"
             data-background="{{url('assets/img/slider/17.jpg')}}" data-overlay-dark="5">
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
                                            <h6>Cynthia & Carl <i>|</i> <span><a href="javascript:void(0)">View the wedding</a></span>
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
                                            <h6>Lauren & Wayne <i>|</i> <span><a href="javascript:void(0)">View the wedding</a></span>
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
    <!-- About Us -->
    <section class="about2 cover section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">About Us</div>
                    <div class="section-title">Areion <span>Productions</span></div>
                    <p>Any nation well-known for its travel and wedding-related attractions may be your choice. A
                        well-rounded travel destination with a range of experiences should ideally have a rich fusion of
                        natural beauty and cultural appeal. Think of locations that offer a once-in-a-lifetime wedding
                        experience amid stunning scenery and a diverse range of cultures as you research your
                        alternatives.</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"><span class="ti-check"></span></div>
                            <div class="about-list-text">
                                <p>5+ Years of Experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"><span class="ti-check"></span></div>
                            <div class="about-list-text">
                                <p>99+ Wedding Planner</p>
                            </div>
                        </li>
                    </ul>
                    <hr class="border">
                    <div class="about-bottom">
                        {{--<img src="{{url('assets/img/signature-dark.svg')}}" alt="" class="image about-signature">--}}
                        <div class="about-name-wrapper">
                            <div class="about-name">Areion Productions</div>
                            <div class="about-rol">Wedding Planner</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="img-exp">
                        <div class="about-img">
                            <div class="img"><img src="{{url('assets/img/about.jpg')}}" class="img-fluid" alt=""></div>
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
    <!-- Wedding Dates -->
    <section class="section-padding bg-green">
        <div class="container">
            <div class="row text-center justify-content-center mb-5">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title white">A Company Evolution</div>
                    <p class="white">We’re very proud of the path we’ve taken. Explore the history that made us the
                        company
                        we are today.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                        <div class="timeline-step">
                            <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                 data-placement="top" title
                                 data-content="And here's some amazing content. It's very engaging. Right?"
                                 data-original-title="2003">
                                <div class="inner-circle"></div>
                                <p class="white">BRAINSTORM CAL <i class="fa fa-camera-retro" style="font-size:24px"></i></p>
                                <p class="white">Even if you're typically camera-shy, I'll ensure you feel at ease.
                                    Guiding you through poses and eliciting genuine laughter, together we'll craft the
                                    perfect video moment.</p>
                            </div>
                        </div>
                        <div class="timeline-step">
                            <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                 data-placement="top" title
                                 data-content="And here's some amazing content. It's very engaging. Right?"
                                 data-original-title="2004">
                                <div class="inner-circle"></div>
                                <p class="white">RECEIVE YOUR FINAL
                                    PROJECT <i class="fa fa-users" style="font-size:24px"></i>
                                </p>
                                <p class="white">Even if you're typically camera-shy, I'll ensure you feel at ease.
                                    Guiding you through poses and eliciting genuine laughter, together we'll craft the
                                    perfect video moment.</p>
                            </div>
                        </div>
                        <div class="timeline-step">
                            <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                 data-placement="top" title
                                 data-content="And here's some amazing content. It's very engaging. Right?"
                                 data-original-title="2005">
                                <div class="inner-circle"></div>
                                <p class="white">
                                    RECEIVE YOUR FINAL PROJECT <i class="fa fa-video-camera" style="font-size:24px"></i>
                                </p>
                                <p class="white">Depending on the project, approximately one month post-video shoot, you
                                    can expect to receive the color-graded video clips along with the after-movie.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="section-subtitle">Works</div>
                    <div class="section-title">Our <span>Portfolio</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @forelse($portfolio as $keyp => $valp)
                            <div class="square-flip">
                                <div class="square bg-img"
                                     data-background="{{ asset('images/portfolio/' . $valp->home_img) }}">
                                    <div class="square-container d-flex align-items-end justify-content-end">
                                        <div class="box-title">
                                            <h4>{{ ucfirst(substr($valp->first_name, 0, 1)) }}
                                                & {{ ucfirst(substr($valp->last_name, 0, 1)) }}</h4>
                                        </div>
                                    </div>
                                    <div class="flip-overlay"></div>
                                </div>
                                <div class="square2 bg-green">
                                    <div class="square-container2">
                                        <h4>{{ ucfirst($valp->first_name) }} & {{ ucfirst($valp->last_name) }}</h4>
                                        <p>{!! $valp->short_desc !!}</p>
                                        {{--<div class="row portfolio-list mb-30">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>Wedding Planner : Rachel Starletta</li>
                                                    <li>Photographer : Janet Lewis</li>
                                                </ul>
                                            </div>
                                        </div>--}}
                                        <div class="btn-line"><a href="{{ route('portfolio', $valp->id) }}">Find out
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="square-flip">
                                <div class="square bg-img" data-background="{{url('assets/img/couple/3.jpg')}}">
                                    <div class="square-container d-flex align-items-end justify-content-end">
                                        <div class="box-title">
                                            <h4>L & W</h4>
                                            <h6>Green House, Manhattan</h6>
                                        </div>
                                    </div>
                                    <div class="flip-overlay"></div>
                                </div>
                                <div class="square2 bg-green">
                                    <div class="square-container2">
                                        <h4>Lauren & Wayne</h4>
                                        <p>Lorem nissuam nestibulum duru quam the odion elementum ceisue the misse varie
                                            natoque enatibus et dis monte.</p>
                                        <div class="row portfolio-list mb-30">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>Wedding Planner : Rachel Starletta</li>
                                                    <li>Photographer : Janet Lewis</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btn-line"><a href="portfolio-page.html">Find out more</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Video -->
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="4"
             data-background="{{url('assets/img/slider/15.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="section-subtitle"><span>Be Inspired</span></div>
                    <div class="section-title white">Latest wedding <span>Video</span></div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                    <a class="vid" href="https://youtu.be/4hCOTCCTThs">
                        <div class="vid-butn"> <span class="icon">
                                <i class="ti-control-play"></i>
                            </span></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup -->
    <section class="signup">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="img left"><img src="{{url('assets/img/signup.jpg')}}" alt=""></div>
                </div>
                <div class="col-md-6 p-0 valign">
                    <div class="content">
                        <div class="cont text-left">
                            <h4>Get in touch</h4>
                            <p>Ask me a question, I'd love to hear more from you.</p>
                            <form action="{{ route('sendmail') }}" method="post">
                            @csrf

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
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" placeholder="Your Name *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" placeholder="Your Email *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="phone" type="text" placeholder="Your Number *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="subject" type="text" placeholder="Subject *" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *"
                                          required></textarea>
                                    </div>
                                    <div class="col-md-12 mt-15">
                                        <button class="butn-dark" type="submit">Send Message</button>
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
    {{--<section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="{{url('assets/img/clients/1.png')}}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{url('assets/img/clients/2.png')}}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{url('assets/img/clients/3.png')}}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{url('assets/img/clients/4.png')}}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{url('assets/img/clients/5.png')}}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{url('assets/img/clients/6.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
@endsection
