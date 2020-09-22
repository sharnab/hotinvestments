<footer>
    <section class="top-line">
        <div style="background: url({{url('/uploads/page/footer.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">

                <div class="col-md-3 column">
                    <div class="about_widget widget">
                        <div class="heading1">
                            <h2><span>Useful</span> links</h2>
                        </div><!-- heading -->

                        <span><i class="fa fa-envelope"></i>yourcompany@gmail.com</span>
                        <span><i class="fa fa-phone"></i>0888 (29999996)</span>
                        <span><i class="fa fa-location-arrow"></i>1234 Tokyo shibuia , WI 54115</span>
                        <ul class="social-btns">
                            <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 column">
                    <div class="links_widget widget">
                        <div class="heading1">
                            <h2><span>Useful</span> links</h2>
                        </div><!-- heading -->
                        <ul>
                            <li><a href="#" title=""><i class="fa fa-angle-right"></i> Home</a></li>
                            <li><a href="#" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                            <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li>
                            <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 column">
                    <div class="links_widget widget">
                        <div class="heading1">
                            <h2><span>Useful</span> Places</h2>
                        </div><!-- heading -->
                        <ul>
                            <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem ipsum </a></li>
                            <li><a href="#" title=""><i class="fa fa-angle-right"></i> Closest ipsum </a></li>
                            <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem dolom </a></li>
                            <li><a href="#" title=""><i class="fa fa-angle-right"></i> Positioned ipl</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 column">
                    <div class="subscribe_widget widget">
                        <div class="heading1">
                            <h2><span>Subscribe</span> Us</h2>
                        </div><!-- heading -->
                        <p>Positioning the closest positioned for abs positioning</p>
                        <form>
                            <label><input type="text" placeholder="TYPE YOUR EMAIL" /></label>
                            <button type="submit" class="flat-btn"><i class="ti ti-email"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="bottom-line">
        <div class="container">
            <span>Copyright All Right Reserved {{date('Y')}} <a href="#" title="">Hot Investments</a></span>
            <ul>
                <li><a title="" href="#">HOME</a></li>
                <li><a title="" href="#">ABOUT</a></li>
                <li><a title="" href="#">PROPERTIES</a></li>
                <li><a title="" href="#">BLOG</a></li>
                <li><a title="" href="#">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
</footer>
</div>

<!-- Script -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/assets/admin/layout/scripts/jquery.star-rating-svg.js')}}" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function () {
    "use strict";
    jQuery('.tp-banner').show().revolution({
        dottedOverlay: "none",
        delay: 16000,
        startwidth: 1170,
        startheight: 700,
        hideThumbs: 200,
        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 5,
        navigationType: "bullet",
        navigationArrows: "solo",
        navigationStyle: "preview1",
        touchenabled: "on",
        onHoverStop: "on",
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
        parallax: "mouse",
        parallaxBgFreeze: "on",
        parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
        keyboardNavigation: "off",
        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 0,
        navigationVOffset: 20,
        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,
        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,
        shadow: 0,
        fullWidth: "on",
        fullScreen: "off",
        spinner: "spinner4",
        stopLoop: "off",
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        forceFullWidth: "off",
        hideThumbsOnMobile: "off",
        hideNavDelayOnMobile: 1500,
        hideBulletsOnMobile: "off",
        hideArrowsOnMobile: "off",
        hideThumbsUnderResolution: 0,
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        videoJsPath: "rs-plugin/videojs/",
        fullScreenOffsetContainer: ""
    });

    $(".carousel-prop").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: true,
        dots: true,
        nav: false,
        items: 4,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });

    $(".carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: false,
        dots: false,
        nav: true,
        margin: 0,
        items: 3
    });

    $(".carousel-client").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: false,
        dots: false,
        nav: true,
        margin: 30,
        items: 5,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    });

});
</script>
</body>
