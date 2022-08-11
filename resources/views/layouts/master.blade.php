
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="Reprise Responsive web template, Bootstrap Web Templates" />
    <title>Reprise Personal | @yield('title') :: W3layouts</title>
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
<!-- header -->
<header id="site-header" class="header fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <a class="navbar-brand mr-xl-5 mr-lg-3" href="index.html">
                <span class="fa fa-black-tie"></span> Reprise
            </a>
            <!-- if logo is image enable this
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'about' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'service' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('service') }}">Service</a>
                    </li>

                    <li class="nav-item mr-lg-5 {{ Request::path() == 'contact' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                    <!--//search-right-->
                    <div class="search-right ml-xl-5 mr-xl-0 mr-lg-3 ">
                        <!--/search-form-->
                        <form action="#" method="GET" class="search-box position-relative">
                            <div class="input-search">
                                <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus=""
                                       class="search-popup">

                                <button type="submit" class="btn search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                        <!--//search-form-->
                    </div>
                    <!--/search-right-->
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!-- //header -->
    @yield('content')
<!-- Footers-14 -->
<footer class="w3l-footers-14 py-5">
    <div class="container py-md-5 py-sm-3">
        <div class="row w3l-footer-top-form no-gutters">
            <div class="col-lg-7 grid-two-column">
                <div class="footer-image">
                    <img src="assets/images/banner1.jpg" class="img-fluid radius-image">
                </div>
                <div class="text-grid grid-column">
                    <h4>Subscribe to receive my best posts once a month</h4>
                    <p>
                        Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a
                        notification by email.</p>
                </div>
            </div>
            <div class="col-lg-5 form-submitinfo pl-lg-5">
                <form action="#" method="GET">
                    <input type="email" name=" placeholder" placeholder="Enter Your Email" required="">
                    <button type="submit" class="btn btn-primary btn-style submitbtn mt-3">Subscribe Now</button>
                </form>
            </div>
        </div>
        <div class="row footers14-top no-gutters">
            <div class="col-lg-6 footer14-nav-left">
                <ul class="footer14-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-6 footer14-app text-lg-right">
                <span>Download app :</span>
                <a href="#url"><span class="fa fa-apple"></span></a>
                <a href="#url"><span class="fa fa-windows"></span></a>
                <a href="#url"><span class="fa fa-android"></span></a>

            </div>
        </div>
        <div class="footers14-bottom d-flex">
            <div class="copyright">
                <p>© 2021 Reprise. All RIghts Reserved. Design by <a href="#URL">W3Layouts</a></p>
            </div>
            <div class="language-select d-flex">
                <span class="fa fa-language" aria-hidden="true"></span>
                <select>
                    <option>English</option>
                    <option>Estonina</option>
                    <option>Deutsch</option>
                    <option>Nederlan;ds</option>
                </select>
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        &uarr;
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

</footer>
<!-- Footers-14 -->
<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/theme-change.js"></script>
<!--/carousel-->
<script src="assets/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo1").owlCarousel({
            loop: true,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                }
            }
        })
    })
</script>
<!-- //script for tesimonials carousel slider -->
<!-- gallery popup js -->
<script src="assets/js/smartphoto.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sm = new SmartPhoto(".js-img-viwer", {
            showAnimation: false
        });
        // sm.destroy();
    });
</script>
<!-- //gallery popup js -->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->


<!--/MENU-JS-->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
