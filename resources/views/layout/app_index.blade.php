<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Wolo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
<header class="header-menu-area">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="header-action-list">
                            <li><a href="#"><span class="la la-phone mr-2"></span> (233) 0264 790 970</a> </li>
                            <li><a href="#"><span class="la la-envelope-o mr-2"></span>hello@woloafric.com</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex align-items-center justify-content-end">
                        <div class="header-right-info">
                            <ul class="header-social-profile">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end header-right-info -->
                        <div class="header-right-info">
                            <div class="shop-cart">
                                <ul>
                                    <li>
                                        <p class="shop-cart-btn d-flex align-items-center">
                                            <i class="la la-shopping-cart"></i>
                                            <span class="product-count ml-1">2</span>
                                        </p>
                                        <ul class="cart-dropdown-menu">
                                            <li>
                                                <a href="#" class="cart-link">
                                                    <img src="asset_home/images/small-img.jpg" alt="product">
                                                </a>
                                                <p class="cart-info">
                                                    <a href="#">
                                                        The Complete Statistics
                                                    </a>
                                                    <span class="cart__author">Professor Kwame</span>
                                                    <span class="cart__price">
                                                           GH5.99
                                                        <!--                                                        <span class="before-price">GH8.99</span>-->
                                                        </span>
                                                </p>
                                            </li>

                                            <li>
                                                <p class="cart-total">Total: GH20<span class="before-price">GH10.99</span></p>
                                            </li>
                                            <li>
                                                <a class="theme-btn w-100 text-center" href="#">go to Cart</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end shop-cart -->
                        </div><!-- end header-right-info -->
                        <div class="header-right-info">
                            <ul class="header-action-list">
                                @guest
                                    <li><a href="{{url('sign_in_student')}}">Login</a></li>
                                    <li>or</li>
                                    <li><a href="{{url('sign_up_student')}}">Register</a></li>
                                @endguest
                            </ul>
                        </div><!-- end header-right-info -->
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="#" class="logo"><img src="asset_home/images/logo.png"  height="60" width="70" alt="Wolo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <div class="menu-category">
                                <ul>
                                    <li>
                                        <a href="#"><i class="la la-th-large mr-1"></i>Home</a>
{{--                                        <ul class="cat-dropdown-menu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#">WASSCE <i class="la la-angle-right"></i></a>--}}
{{--                                                <ul class="sub-menu">--}}
{{--                                                    <li><a href="#">Objective Question Paths</a></li>--}}
{{--                                                    <li><a href="#">Theory Question Paths</a></li>--}}
{{--                                                    <li><a href="#">Practical Question Paths</a></li>--}}
{{--                                                    <li><a href="#">Exam Timetable</a></li>--}}
{{--                                                    <li><a href="#">General Information</a></li>--}}

{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#">NOVDEC <i class="la la-angle-right"></i></a>--}}
{{--                                                <ul class="sub-menu">--}}
{{--                                                    <li><a href="#">Objective Question Paths</a></li>--}}
{{--                                                    <li><a href="#">Theory Question Paths</a></li>--}}
{{--                                                    <li><a href="#">Practical Question Paths</a></li>--}}
{{--                                                    <li><a href="#">Exam Timetable</a></li>--}}
{{--                                                    <li><a href="#">Registration Centres</a></li>--}}

{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
                                    </li>
                                </ul>
                            </div><!-- end menu-category -->
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="search" placeholder="Search subject to learn">
                                            <span class="la la-search search-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                </form>
                            </div><!-- end contact-form-action -->
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="#">SHS</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="{{url('core_subject')}}">Core Subjects</a></li>
                                            <li><a href="{{url('elective_subject')}}">Elective Subjects</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Skills training</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
{{--                                    <li><a href="#">contact</a></li>--}}
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="logo-right-button">
                                <a href="{{url('sign_in_teacher')}}" class="theme-btn">Teacher</a>
                            </div><!-- end logo-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->
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
            <div class="col-lg-4 column-td-half">
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
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Company</h3>
                    <!--                    <span class="section-divider"></span>--><br>
                    <ul class="list-items">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Become a Teacher</a></li>
                        <li><a href="#">Become a Partner</a></li>
                        <li><a href="#">Become an Agent</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
{{--            <div class="col-lg-3 column-td-half">--}}
{{--                <div class="footer-widget">--}}
{{--                    <h3 class="widget-title">Links</h3>--}}
{{--                    <!--                    <span class="section-divider"></span>--><br>--}}
{{--                    <ul class="list-items">--}}
{{--                        <li><a href="#">TV Schedules</a></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- end footer-widget -->--}}
{{--            </div><!-- end col-lg-3 -->--}}
            <div class="col-lg-4 column-td-half">
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


<div class="tooltip_templates">
    <div id="tooltip_content_2">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="#">brad travesy</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.html">Learn Ethical Hacking from Scratch Your Stepping</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="#" class="mr-1">Hacking</a> <span>| Development</span>
                </p>
                <div class="rating-wrap d-flex mt-2 mb-3">
                    <ul class="review-stars">
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star-o"></span></li>
                    </ul>
                    <span class="star-rating-wrap">
                        <span class="star__rating">4.4</span>
                        <span class="star__count">(20)</span>
                    </span>
                </div><!-- end rating-wrap -->
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.html" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">Free</span>
                    <a href="#" class="text-btn">get enrolled</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_3">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">mark hardson</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.html">Microsoft SQL Server 2019 for Everyone</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="#" class="mr-1">SQL</a> <span>| Development</span>
                </p>
                <div class="rating-wrap d-flex mt-2 mb-3">
                    <ul class="review-stars">
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star-o"></span></li>
                    </ul>
                    <span class="star-rating-wrap">
                        <span class="star__rating">4.4</span>
                        <span class="star__count">(20)</span>
                    </span>
                </div><!-- end rating-wrap -->
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.html" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">$68.00</span>
                    <a href="#" class="text-btn">add to cart</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_4">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">Kamran Paul</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.html">User Experience Design - Adobe XD UI UX Design</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="#" class="mr-1">Design</a> <span>| Development</span>
                </p>
                <div class="rating-wrap d-flex mt-2 mb-3">
                    <ul class="review-stars">
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star-o"></span></li>
                    </ul>
                    <span class="star-rating-wrap">
                        <span class="star__rating">4.4</span>
                        <span class="star__count">(20)</span>
                    </span>
                </div><!-- end rating-wrap -->
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.html" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">Free</span>
                    <a href="#" class="text-btn">Get Enrolled</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_5">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">Jose Purtila</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.html">The Complete Digital finance Marketing Course</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="#" class="mr-1">Marketing</a> <span>| Development</span>
                </p>
                <div class="rating-wrap d-flex mt-2 mb-3">
                    <ul class="review-stars">
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star-o"></span></li>
                    </ul>
                    <span class="star-rating-wrap">
                        <span class="star__rating">4.4</span>
                        <span class="star__count">(20)</span>
                    </span>
                </div><!-- end rating-wrap -->
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.html" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                    <a href="#" class="text-btn">Add to cart</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_6">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">Noelle Travesy</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.html">Complete Python Bootcamp: Go from zero to hero</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="#" class="mr-1">Python</a> <span>| Development</span>
                </p>
                <div class="rating-wrap d-flex mt-2 mb-3">
                    <ul class="review-stars">
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star-o"></span></li>
                    </ul>
                    <span class="star-rating-wrap">
                        <span class="star__rating">4.4</span>
                        <span class="star__count">(20)</span>
                    </span>
                </div><!-- end rating-wrap -->
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.html" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">$68.00</span>
                    <a href="#" class="text-btn">add to cart</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->


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
