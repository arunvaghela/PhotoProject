@extends('layouts.app')

@section('content')
    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9 -->
            <div class="item bg-img" data-overlay-dark="2" data-background="{{url('assets/img/slider/1.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 slider-text js-fullheight">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h4>Dream Maker</h4>
                                        <h1>Wedding & Event Planner For Colorful Couples</h1>
                                        <p>We would love to meet up and chat about how we can make <span>your dream</span> wedding happen!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="2" data-background="{{ url('assets/img/slider/2.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 slider-text js-fullheight">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h4>Dream Maker</h4>
                                        <h1>International & Destination Wedding Planner</h1>
                                        <p>No matter your dreams - we can assist you in planning your <span>weddings - events</span>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="2" data-background="{{ url('assets/img/slider/3.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 slider-text js-fullheight">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h4>Dream Wedding</h4>
                                        <h1>We Make Your Wedding Dreams Come</h1>
                                        <p>We believe that it is all about the <span>big dreams</span> and the small details! Nullam vestibulum iaculis maximus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About Florya Weddings -->
    <section class="about section-padding bg-green">
        <div class="container">
            <div class="row">
                <div class="col-md-5 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle white">What we do</div>
                    <div class="section-title white">A wedding that is <span class="white">True</span> as you are!</div>
                    <p>We would love to meet up and chat about how we can make your dream wedding happen! Nullam vestibulum iaculis maximus. International facilisis leo at ac tristique nunc vulputate.</p>
                </div>
                <div class="col-md-6 offset-md-1 mt-30 animate-box" data-animate-effect="fadeInUp">
                    <p>Nullam vestibulum iaculis maximus. In facilisis leo at leo convallis, ac tristique nunc vulputate. Maecenas volutpat molestie purus eu tempus. Mauris daisen aliquet augue, id aliquam enim faucibus aucton.</p>
                    <p>Maecenas volutpat molestie purus eu tempus. Mauris dapibus aliquet augue, id aliquam enim faucibus auctor. Vestibulum eget dui quis tortor mollis tempor quis non turpis. Donec eget semper neque. In aliquam tristique consectetur. Etiam venenatis lobortis neque, eget sollicitudin erat venenatis sit amet. In interdum odio at nunc pulvinar viverra rutrum id est.</p>
                    <div class="butn-light mt-15"> <a href="about.html"><span>Find out more</span></a> </div>
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
                    <p>Professional Wedding & Event Planner surabit aliquet orci elit gene tristisue in lorem dream vitae alisuam tincidunt felis sed gravida aliquam nemue libero hendrerit magna sit amenta the mollis lacus huam maurisine alisuam erat volutfat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{url('assets/img/services/1.jpg')}}" alt=""> </div>
                            <div class="con">
                                <h5><a href="services-page.html">Wedding <span>Planner</span></a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col-md-12 text-right">
                                        <div class="permalink"><a href="services-page.html">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{url('assets/img/services/5.jpg')}}" alt=""> </div>
                            <div class="con">
                                <h5><a href="services-page.html">Master of <span>Ceremonies</span></a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col-md-12 text-right">
                                        <div class="permalink"><a href="services-page.html">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{url('assets/img/services/6.jpg')}}" alt=""> </div>
                            <div class="con">
                                <h5><a href="services-page.html">Special <span>Events</span></a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col-md-12 text-right">
                                        <div class="permalink"><a href="services-page.html">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{url('assets/img/services/2.jpg')}}" alt=""> </div>
                            <div class="con">
                                <h5><a href="services-page.html"><span>Birthday</span> Planner</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col-md-12 text-right">
                                        <div class="permalink"><a href="services-page.html">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{url('assets/img/services/3.jpg')}}" alt=""> </div>
                            <div class="con">
                                <h5><a href="services-page.html">Destination <span>Wedding</span></a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col-md-12 text-right">
                                        <div class="permalink"><a href="services-page.html">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ url('img/services/4.jpg') }}" alt=""> </div>
                            <div class="con">
                                <h5><a href="services-page.html">Corporate <span>Events</span></a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col-md-12 text-right">
                                        <div class="permalink"><a href="services-page.html">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ url('assets/img/slider/17.jpg') }}" data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <div class="testimonials-box">
                            <div class="owl-carousel owl-theme">
                                <div class="item"> <span>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                    </span>
                                    <h5>" If you manage to get Samantha as your wedding planner, you are one lucky couple. We highly recommend! "</h5>
                                    <div class="info">
                                        <div class="cont">
                                            <h6>Emily & Enrico <i>|</i> <span><a href="portfolio-page.html">View the wedding</a></span></h6>
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
                                    <h5>" If you manage to get Duru as your wedding planner, you are one lucky couple. We highly recommend! "</h5>
                                    <div class="info">
                                        <div class="cont">
                                            <h6>Cynthia & Carl <i>|</i> <span><a href="portfolio-page.html">View the wedding</a></span></h6>
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
                                    <h5>" If you manage to get Duru as your wedding planner, you are one lucky couple. We highly recommend! "</h5>
                                    <div class="info">
                                        <div class="cont">
                                            <h6>Lauren & Wayne <i>|</i> <span><a href="portfolio-page.html">View the wedding</a></span></h6>
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
                    <div class="section-title">Florya <span>Weddings</span></div>
                    <p>You can choose any country with good tourism wedding elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the pellentesque velit florya id velit ac arcu posuere blane.</p>
                    <p>Wedding nissuam nestibulum ac quam nec odio elementum ceisue the miss varius natoque penatibus et magnis dis parturient monte.</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>20 Years of Experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>250+ Wedding Planner</p>
                            </div>
                        </li>
                    </ul>
                    <hr class="border">
                    <div class="about-bottom"> <img src="{{ url('assets/img/signature-dark.svg') }}" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-name">Samantha Megan</div>
                            <div class="about-rol">Wedding Planner</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="img-exp">
                        <div class="about-img">
                            <div class="img"> <img src="{{ url('assets/img/about.jpg') }}" class="img-fluid" alt=""> </div>
                        </div>
                        <div id="circle">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                </defs>
                                <circle cx="150" cy="100" r="75" fill="none" />
                                <g>
                                    <use xlink:href="#circlePath" fill="none" />
                                    <text fill="#575c57">
                                        <textPath xlink:href="#circlePath"> . florya weddings . planner </textPath>
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
            <div class="row">
                <div class="col-md-5">
                    <div class="section-subtitle white">Dateline</div>
                    <div class="section-title white">Wedding <span class="white">Dates</span></div>
                    <p class="white">Your at-a-glance guide to where I stand on all the truly important things. Wedding elit miss the eget the solin miss citudino selus rutrum in miss vestibulum eleifen ornare torto.</p>
                    <div class="butn-light mt-15 mb-30"> <a href="contact.html"><span>Get in touch</span></a> </div>
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
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ url('assets/img/couple/5.jpg') }}">
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h4>C & C</h4>
                                        <h6>Lakewood WA, USA</h6>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2 bg-green">
                                <div class="square-container2">
                                    <h4>Cynthia & Carl</h4>
                                    <p>Lorem nissuam nestibulum duru quam the odion elementum ceisue the misse varie natoque enatibus et dis monte.</p>
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
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ url('assets/img/couple/3.jpg') }}">
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
                                    <p>Lorem nissuam nestibulum duru quam the odion elementum ceisue the misse varie natoque enatibus et dis monte.</p>
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
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ url('assets/img/couple/4.jpg') }}">
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h4>H & H</h4>
                                        <h6>Level Park, Oxfordshire</h6>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2 bg-green">
                                <div class="square-container2">
                                    <h4>Heather & Henry</h4>
                                    <p>Lorem nissuam nestibulum duru quam the odion elementum ceisue the misse varie natoque enatibus et dis monte.</p>
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
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ url('assets/img/couple/2.jpg') }}">
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h4>E & M</h4>
                                        <h6>Gold Park CA, USA</h6>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2 bg-green">
                                <div class="square-container2">
                                    <h4>Emily & Micheal</h4>
                                    <p>Lorem nissuam nestibulum duru quam the odion elementum ceisue the misse varie natoque enatibus et dis monte.</p>
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
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ url('assets/img/couple/1.jpg') }}">
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h4>S & R</h4>
                                        <h6>Silver Park, Oxfordshire</h6>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2 bg-green">
                                <div class="square-container2">
                                    <h4>Sophia & Robert</h4>
                                    <p>Lorem nissuam nestibulum duru quam the odion elementum ceisue the misse varie natoque enatibus et dis monte.</p>
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
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ url('assets/img/couple/6.jpg') }}">
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h4>O & J</h4>
                                        <h6>Blue House, London</h6>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2 bg-green">
                                <div class="square-container2">
                                    <h4>Olivia & John</h4>
                                    <p>Lorem nissuam nestibulum duru quam the odion elementum ceisue the misse varie natoque enatibus et dis monte.</p>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Video -->
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="4" data-background="{{ url('assets/img/slider/15.jpg') }}">
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
                            </span> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section class="pricing section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30">
                    <div class="section-subtitle">Best Prices</div>
                    <div class="section-title">Pricing <span>Plan</span></div>
                </div>
                <div class="col-md-7 mb-30">
                    <p>The best prices for your relaxing vacation curabit aliquet orci elit gene tristique in lorem dream vitae alisuam tincidunt felis sed gravida aliquam nesue libero hendreri mana the amenta the mollis lacus tuam maurisine. Alituam erat volutsat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="pricing left">
                            <figure><img src="{{ url('assets/img/pricing/01.jpg') }}" alt="" class="img-fluid"></figure>
                            <div class="caption padding-left">
                                <div class="name">Full Wedding <span>Plan</span></div>
                                <div class="amount">$6000<span>/ starting from</span></div>
                                <p class="white">Curabit aliquet orci elit gene on tristique in the dream vitaen. Aliquam tincidunt, felis sed gravida aliquam the neque miss hendrerit magna sit amenta the mollis lacus.</p>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Full service wedding planner</li>
                                    <li><i class="ti-check"></i> Wedding stylist</li>
                                    <li><i class="ti-check"></i> Wedding advice</li>
                                </ul>
                                <div class="butn-light mt-30"> <a href="#"><span>See More</span></a> </div>
                            </div>
                        </div>
                        <div class="pricing">
                            <figure><img src="{{ url('assets/img/pricing/02.jpg') }}" alt="" class="img-fluid"></figure>
                            <div class="caption padding-left">
                                <div class="name">Pre-Wedding <span>Plan</span></div>
                                <div class="amount">$6000<span>/ starting from</span></div>
                                <p class="white">Curabit aliquet orci elit gene on tristique in the dream vitaen. Aliquam tincidunt, felis sed gravida aliquam the neque miss hendrerit magna sit amenta the mollis lacus.</p>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Full service wedding planner</li>
                                    <li><i class="ti-check"></i> Wedding stylist</li>
                                    <li><i class="ti-check"></i> Wedding advice</li>
                                </ul>
                                <div class="butn-light mt-30"> <a href="#"><span>See More</span></a> </div>
                            </div>
                        </div>
                        <div class="pricing">
                            <figure><img src="{{ url('assets/img/pricing/03.jpg') }}" alt="" class="img-fluid"></figure>
                            <div class="caption padding-left">
                                <div class="name">Party <span>Plan</span></div>
                                <div class="amount">$2000<span>/ starting from</span></div>
                                <p class="white">Curabit aliquet orci elit gene on tristique in the dream vitaen. Aliquam tincidunt, felis sed gravida aliquam the neque miss hendrerit magna sit amenta the mollis lacus.</p>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Full service wedding planner</li>
                                    <li><i class="ti-check"></i> Wedding stylist</li>
                                    <li><i class="ti-check"></i> Wedding advice</li>
                                </ul>
                                <div class="butn-light mt-30"> <a href="#"><span>See More</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="blog section-padding bg-green">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30">
                    <div class="section-subtitle white">Latest News</div>
                    <div class="section-title white">Wedding <span class="white">Blog</span></div>
                </div>
                <div class="col-md-7 mb-30">
                    <p class="white">Wedding Tips, inspiration and bridal reports. Curabit aliquet orci elit gene tristique lorem dream vitae situam tincidun felis sed gravida alisuam nemue libero hendrerit maina into amenta the mollis lacus quam maurisine in the miss erat volutpat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ url('assets/img/slider/18.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">10 Dec 2024 in <a href="#0">Trouwtips</a></span>
                                <h5><a href="post.html">5 Tips On How To Be The Best Groomsman Ever</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ url('assets/img/slider/5.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">12 Dec 2024 in <a href="#0">Wedding Tips</a></span>
                                <h5><a href="post.html">5 tips for a successful multilingual wedding ceremony</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ url('assets/img/slider/6.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">15 Dec 2024 in <a href="#0">Trouwtips</a></span>
                                <h5><a href="post.html">Is it possible to plan a wedding in 3 months?</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ url('assets/img/slider/10.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">18 Dec 2024 in <a href="#0">Wedding</a></span>
                                <h5><a href="post.html">20 Rules For How To Be The Perfect Bridesmaid</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ url('assets/img/slider/19.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">20 Dec 2024 in <a href="#0">Wedding</a></span>
                                <h5><a href="post.html">How to Keep Motivated as a Wedding Planner</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ url('assets/img/slider/17.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    24 Dec 2024 in <a href="#0">Events</a>
                                </span>
                                <h5><a href="post.html">A Colour Palette for Every Season of Love</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup -->
    <section class="signup">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="img left"> <img src="{{ url('assets/img/signup.jpg') }}" alt=""> </div>
                </div>
                <div class="col-md-6 p-0 valign">
                    <div class="content">
                        <div class="cont text-left">
                            <h6>Sign Up</h6>
                            <h4>Subscribe to the <span>Newsletter</span></h4>
                            <p>For the latest inspiration and insider tips straight to your inbox.</p>
                            <form method="post" class="contact__form" action="https://duruthemes.com/demo/html/florya/light/mail.php">
                                <!-- form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
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
                        <a href="#0"><img src="{{ url('assets/img/clients/1.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ url('assets/img/clients/2.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ url('assets/img/clients/3.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ url('assets/img/clients/4.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ url('assets/img/clients/5.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ url('assets/img/clients/6.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
