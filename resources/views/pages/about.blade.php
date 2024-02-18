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
                            <h4>Florya Weddings</h4>
                            <h1>Samantha Megan</h1>
                            <p>I am Samantha, wedding planner for colorful couples, a hopeless romantic who loves bold
                                statements.</p>
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
                    <div class="section-title">Florya <span>Weddings</span></div>
                    <p>You can choose any country with good tourism wedding elementum sesue the aucan vestibulum aliquam
                        justo in sapien rutrum volutpat. Donec in quis the pellentesque velit florya id velit ac arcu
                        posuere blane.</p>
                    <p>Wedding nissuam nestibulum ac quam nec odio elementum ceisue the miss varius natoque penatibus et
                        magnis dis parturient monte.</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"><span class="ti-check"></span></div>
                            <div class="about-list-text">
                                <p>20 Years of Experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"><span class="ti-check"></span></div>
                            <div class="about-list-text">
                                <p>250+ Wedding Planner</p>
                            </div>
                        </li>
                    </ul>
                    <hr class="border">
                    <div class="about-bottom">
                        <img src="img/signature-dark.svg" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-name">Samantha Megan</div>
                            <div class="about-rol">Wedding Planner</div>
                        </div>
                    </div>
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
                                        <textPath xlink:href="#circlePath"> . florya weddings . planner</textPath>
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
    <!-- Team -->
    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="section-subtitle">Our Senior</div>
                    <div class="section-title">Wedding <span>Team</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <img src="{{asset('assets/img/team/team1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <h4><span>Jesica</span> | Event Planner</h4>
                            <p>Wedding inilla duiman at elit finibus viverra nec a lacus in the nesuzin sinem misuscit
                                non sesue in miss the aucan volus.</p>
                            <p>Event nissuam nestibulum duru quam nec odio elementum ceisue the misso varius natoque
                                penatibus et magnis dis monte. Donec tuis in the velition florya id velit ac in the miss
                                arcu posuere blane.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <h4 class="white"><span>Patricia</span> | Wedding Planner</h4>
                            <p class="white">Wedding inilla duiman at elit finibus viverra nec a lacus in the nesuzin
                                sinem misuscit non sesue in miss the aucan volus.</p>
                            <p class="white">Event nissuam nestibulum duru quam nec odio elementum ceisue the misso
                                varius natoque penatibus et magnis dis monte. Donec tuis in the velition florya id velit
                                ac in the miss arcu posuere blane.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <img src="{{asset('assets/img/team/team2.jpg')}}" alt="">
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
@endsection
