@extends('layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="{{asset('assets/img/about2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-5 slider-text js-fullheight">
                    <div class="slider-text-inner">
                        <div class="desc">
                            <h4>Get in touch</h4>
                            <h1>Contact Information</h1>
                            <p>Fill out the form below I’ll get back to you within 24 hours to book a discovery call and start chatting about all the exciting possibilities.</p>
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
    <!-- Contact -->
    <section class="contact section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-5 mb-60">
                    <h3>Contact Information</h3>
                    <div class="contact-info mb-30">
                        <div class="icon"><span class="ti-headphone-alt"></span></div>
                        <div class="text">
                            <p>Exploration Call</p> <a href="tel:855-100-333">855 100 3333</a>
                        </div>
                    </div>
                    <div class="contact-info mb-30">
                        <div class="icon"><span class="ti-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:info@luxuryhotel.com">wedding@florya.com</a>
                        </div>
                    </div>
                    <div class="contact-info mb-30">
                        <div class="icon"><span class="ti-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p> 1616 Broadway NY, New York 10001
                            <br>United States of America
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-30 offset-md-1">
                    <h3>Get in touch</h3>
                    <p>Ask me a question, I'd love to hear more from you.</p>
                    <form method="post" class="contact__form" action="https://duruthemes.com/demo/html/florya/light/mail.php">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
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
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                            </div>
                            <div class="col-md-12 mt-15">
                                <button class="butn-dark"><a href="#0"><span>Send Message</span></a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573147.7480448114!2d-74.84628175962355!3d41.04009641088412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25856139b3d33%3A0xb2739f33610a08ee!2s1616%20Broadway%2C%20New%20York%2C%20NY%2010019%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1646760525018!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                    <p class="white">Questions aliquet orci elit gene tristique in lorem dream vitae. Aliquam tincidunten felis sed gravida aliquam neque libero hendrerit mana the amentane the mollis lacus quam maurisine erase.</p>
                    <p class="white">Wedding inilla duiman at elit finibus viverra nec a lacus in the nesuzin senenoice misuscit non sesue the aucan volus.</p>
                </div>
                <div class="col-md-6">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">How do I plan a wedding in three months?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Do we need a wedding planner?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">How should you deal with wedding stress?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">How do you plan a destination wedding?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">What stationery do I need for my wedding?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
