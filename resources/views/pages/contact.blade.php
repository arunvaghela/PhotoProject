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
                            <h4>Get in touch</h4>
                            <h1>Contact Information</h1>
                            <p>Please complete the form below, and I'll reach out to you within 24 hours to schedule a
                                discovery call and begin discussing the myriad of exciting possibilities ahead.</p>
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
                            <p>Exploration Call</p> <a href="tel:323-804-9319">+1 (323) 804-9319</a>
                        </div>
                    </div>
                    <div class="contact-info mb-30">
                        <div class="icon"><span class="ti-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:info@areionproductions.com">info@areionproductions.com</a>
                        </div>
                    </div>
                    <div class="contact-info mb-30">
                        <div class="icon"><span class="ti-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p> {{--1616 Broadway NY, New York 10001<br>--}}
                            United States of America
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-30 offset-md-1">
                    <h3>Get in touch</h3>
                    <p>Ask me a question, I'd love to hear more from you.</p>
                    <form action="{{ route('sendmail') }}" method="post">
                    @csrf
                    <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your
                                    message was sent successfully.
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
            <div class="row">
                <div class="col-md-12">
                    <div class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.03609235!2d-74.30933268632423!3d40.697539959410896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1708969741325!5m2!1sen!2sin"
                            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
