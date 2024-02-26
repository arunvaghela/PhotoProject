<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">Areion Productions</h3>
                        <p class="footer-about-text">Hi there, As a wedding planner and creator, I'm Areion Productions,
                            and I'm loving life in the energetic metropolis of New York. I love to seize any opportunity
                            to create unique experiences for couples. Together, let's make your ideal wedding a
                            reality!</p>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Explore</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/service') }}">Services</a></li>
                            <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">Get in touch</h3>
                        <p class="footer-contact-text">Don't hesitate to reach out to our team.
                        </p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone"><span class="ti-headphone-alt"></span><a href="tel:323-804-9319">+1 (323) 804-9319</a></p>
                            <p class="footer-contact-mail"><a href="mailto:info@areionproductions.com">info@areionproductions.com</a></p>
                        </div>
                        <div class="footer-about-social-list">
                            <a href="http://instagram.com/areion_productions" target="_blank"><i class="ti-instagram"></i></a>
                            {{--<a href="#"><i class="ti-youtube"></i></a>--}}
                            <a href="https://facebook.com/profile.php?id=100090384677112" target="_blank"><i class="ti-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">© Copyright {{ date('Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/13238049319?text=Thank%20you%20For%20reaching%20out%20to%20me%0AAreion%20Productions" class="wp-float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</footer>
<!-- jQuery -->
<script src="{{ url('assets/js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ url('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ url('assets/js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ url('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.isotope.v3.0.2.js') }}"></script>
<script src="{{ url('assets/js/pace.js') }}"></script>
<script src="{{ url('assets/js/popper.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/scrollIt.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ url('assets/js/YouTubePopUp.js') }}"></script>
<script src="{{ url('assets/js/smooth-scroll.min.js') }}"></script>
<script src="{{ url('assets/js/vegas.slider.min.js') }}"></script>
<script src="{{ url('assets/js/custom.js') }}"></script>

<!-- Vegas Background Slideshow (vegas.slider kenburns) -->
<script>
    $(document).ready(function () {
        @if(isset($img1))
        $('#kenburnsSliderContainer').vegas({
            slides: [{
                src: '{{ $img1 }}'
            }, {
                src: '{{ $img2 }}'
            }, {
                src: '{{ $img3 }}'
            }],
            overlay: true,
            transition: 'fade2',
            animation: 'kenburnsUpRight',
            transitionDuration: 1000,
            delay: 10000,
            animationDuration: 20000
        });
        @endif
    });
</script>
</body>
<!-- Mirrored from duruthemes.com/demo/html/florya/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 10:19:47 GMT -->
</html>
