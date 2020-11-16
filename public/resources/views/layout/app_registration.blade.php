<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Wolo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Wolo - The Smart Way to Learn</title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="asset_home/images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="asset_home/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset_home/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset_home/css/line-awesome.css">
    <link rel="stylesheet" href="asset_home/css/animate.min.css">
    <link rel="stylesheet" href="asset_home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset_home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset_home/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="asset_home/css/magnific-popup.css">
    <link rel="stylesheet" href="asset_home/css/fancybox.css">
    <link rel="stylesheet" href="asset_home/css/tooltipster.bundle.css">
    <link rel="stylesheet" href="asset_home/css/style.css">
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <img  class="loader" src="asset_home/images/logo.png"/>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<section class="header-menu-area course-dashboard-header">
    <div class="header-menu-fluid">
        <div class="header-menu-content course-dashboard-menu-content">
            <div class="container-fluid">
                <div class="main-menu-content d-flex align-items-center">
                    <div class="logo-box">
                        <a href="#" class="logo" title="Aduca"><img src="asset_home/images/logo_footer.png" alt="wolo"></a>
                    </div>
                    <div class="course-dashboard-title">
{{--                        <a href="#">Register to learn all subject topic on Wolo</a>--}}
                    </div>
                    <div class="menu-wrapper">
                        <div class="logo-right-button">
                            <ul class="d-flex align-items-center">
{{--                                <li><a href="#" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".rating-modal-form"><i class="la la-star mr-1"></i>leave a rating</a></li>--}}
{{--                                <li><a href="#" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".share-modal-form"><i class="la la-share mr-1"></i>share</a></li>--}}
                                <li>
                                    <div class="msg-action-dot">
                                        <div class="dropdown">
                                            <a class="action-dot" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="la la-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a class="dropdown-item" href="{{url('dashboard')}}">Teacher</a></li>
                                                    <li><a class="dropdown-item" href="{{url('dashboard')}}">Partner</a></li>
                                                    <li><a class="dropdown-item" href="{{url('dashboard')}}">Agent</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- end logo-right-button -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-content -->
    </div><!-- end header-menu-fluid -->
</section><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

@yield('content')



<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area section-bg-2 padding-top-100px padding-bottom-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <a href="index.html">
                        <img src="asset_home/images/logo_footer.png" alt="footer logo" class="footer__logo">
                    </a>
                    <ul class="list-items footer-address">
                        <h3 class="widget-title font-size-17 mt-4">Telephone</h3>
                        <li><a href="tel:+(233)0264790970">(233) 0264 790 970</a></li>
                        <li><a href="mailto:info@woloafric.com" class="mail">info@woloafric.com</a></li>
                        <h3 class="widget-title font-size-17 mt-4">Location</h3>
                        <li>No. 13 Tingatinga Street, Near Keep Fit, Dansoman-Accra.</li>
                        <h3 class="widget-title font-size-17 mt-4">Address</h3>
                        <li> P. O Box GP 17202, Accra Digital Address: GA-564-6430</li>
                    </ul>
                    <h3 class="widget-title font-size-17 mt-4">We are on</h3>
                    <ul class="social-profile">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Company</h3>
                    <!--                    <span class="section-divider"></span>--><br>
                    <ul class="list-items">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Become a Teacher</a></li>
                        <li><a href="#">Become a Partner</a></li>
                        <li><a href="#">Become a Learner</a></li>
                        <li><a href="#">Become an Agent</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Courses</h3>
                    <!--                    <span class="section-divider"></span>--><br>
                    <ul class="list-items">
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Mathematics</a></li>
                        <li><a href="#">Building & Construction</a></li>
                        <li><a href="#">Language</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Religious Studies</a></li>
                        <li><a href="#">Food & Catering</a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Download App</h3>
                    <!--                    <span class="section-divider"></span>--><br>
                    <ul class="btn-box">
                        <li>
                            <a href="#" class="theme-btn">
                                <i class="la la-apple icon-element"></i>
                                <span class="app-titles">
                                    <span class="app__subtitle">Download on the</span>
                                    <span class="app__title">App Store</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="theme-btn">
                                <i class="la la-android icon-element"></i>
                                <span class="app-titles">
                                    <span class="app__subtitle">Get in on</span>
                                    <span class="app__title">Google Play</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="copyright-content">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <p class="copy__desc">&copy; 2020 Wolo. All Rights Reserved. by <a href="https:\\www.woloafric.com">Wolo Africa Ltd</a></p>
                </div><!-- end col-lg-9 -->
                <div class="col-lg-2">
                    <div class="sort-ordering">
                        <select class="sort-ordering-select">
                            <option value="1">English</option>
                        </select>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end copyright-content -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- template js files -->
<script src="asset_home/js/jquery-3.4.1.min.js"></script>
<script src="asset_home/js/popper.min.js"></script>
<script src="asset_home/js/bootstrap.min.js"></script>
<script src="asset_home/js/bootstrap-select.min.js"></script>
<script src="asset_home/js/owl.carousel.min.js"></script>
<script src="asset_home/js/magnific-popup.min.js"></script>
<script src="asset_home/js/isotope.js"></script>
<script src="asset_home/js/waypoint.min.js"></script>
<script src="asset_home/js/jquery.counterup.min.js"></script>
<script src="asset_home/js/particles.min.js"></script>
<script src="asset_home/js/particlesRun2.js"></script>
<script src="asset_home/js/fancybox.js"></script>
<script src="asset_home/js/wow.js"></script>
<script src="asset_home/js/date-time-picker.js"></script>
<script src="asset_home/js/jquery.filer.min.js"></script>
<script src="asset_home/js/emojionearea.min.js"></script>
<script src="asset_home/js/smooth-scrolling.js"></script>
<script src="asset_home/js/tooltipster.bundle.min.js"></script>
<script src="asset_home/js/main.js"></script>
</body>
</html>
