<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">Florya Weddings</h3>
                        <p class="footer-about-text">Hi, I’m Samantha, wedding planner and designer, loving life in the wonderful New York. The nestam acuam nec odio the elementum.</p>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Explore</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">Get in touch</h3>
                        <p class="footer-contact-text">1010 Broadway NY, New York 10001
                            <br>United States of America
                        </p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone"><span class="ti-headphone-alt"></span> 855 100 3333</p>
                            <p class="footer-contact-mail">wedding@florya.com</p>
                        </div>
                        <div class="footer-about-social-list"> <a href="#"><i class="ti-instagram"></i></a> <a href="#"><i class="ti-twitter"></i></a> <a href="#"><i class="ti-youtube"></i></a> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-pinterest"></i></a> </div>
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
                        <p class="footer-bottom-copy-right">© Copyright 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    $(document).ready(function() {
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
