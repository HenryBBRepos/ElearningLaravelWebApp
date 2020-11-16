<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Wolo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Wolo -  Teacher</title>

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
    <link rel="stylesheet" href="asset_home/css/jquery.filer.css">
    <link rel="stylesheet" href="asset_home/css/tooltipster.bundle.css">
    <link rel="stylesheet" href="asset_home/css/jqvmap.css">
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
<header class="header-menu-area dashboard-header">
    <div class="header-menu-content dashboard-menu-content">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="{{url('dashboard_teacher')}}" class="logo"><img src="asset_home/images/logo.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <div class="contact-form-action mr-auto">
                                <form method="post">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="search" placeholder="Search for lessons">
                                            <span class="la la-search search-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                </form>
                            </div><!-- end contact-form-action -->
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">courses</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="#">General Science</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">General Arts</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SHS</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="#">SHS 1</a></li>
                                            <li><a href="#">SHS 2</a></li>
                                            <li><a href="#">SHS 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Skills training</a>
                                    </li>

                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="logo-right-button d-flex align-items-center">
                                <div class="header-action-button d-flex align-items-center">
                                    <div class="notification-wrap d-flex align-items-center">
                                        <div class="notification-item mr-3">
                                            <div class="dropdown">
                                                <button class="notification-btn dropdown-toggle" type="button" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-bell"></i>
                                                    <span class="quantity">5</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="notificationDropdownMenu">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title">
                                                            <h4 class="widget-title">Notifications</h4>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <a href="dashboard.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="icon-element bg-color-2 text-white">
                                                                        <i class="la la-lock"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <span class="time">October 14, 2020</span>
                                                                        <p class="text">You changed password</p>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                        </div><!-- end mess__body -->
                                                        <div class="btn-box p-2 text-center">
                                                            <a href="dashboard.html">Show All Notifications</a>
                                                        </div><!-- end btn-box -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                        <div class="notification-item mr-3">
                                            <div class="dropdown">
                                                <button class="notification-btn dropdown-toggle" type="button" id="messageDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-envelope"></i>
                                                    <span class="quantity">5</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="messageDropdownMenu">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title">
                                                            <h4 class="widget-title">Messages</h4>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <a href="dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status online-status">
                                                                        <img src="asset_home/images/team8.jpg" alt="Team img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Emma Wayson</h4>
                                                                        <p class="text">Thanks for reaching out. I will solve it and get back to you.</p>
                                                                        <span class="time">2 days ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                        </div><!-- end mess__body -->
                                                        <div class="btn-box p-2 text-center">
                                                            <a href="dashboard-message.html">Show All Message</a>
                                                        </div><!-- end btn-box -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                    <div class="user-action-wrap">
                                        <div class="notification-item user-action-item">
                                            <div class="dropdown">
                                                <button class="notification-btn dot-status online-status dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="asset_home/images/team7.jpg" alt="John-doe">
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title d-flex align-items-center">
                                                            <div class="image">
                                                                <a href="#">
                                                                    <img src="asset_home/images/team7.jpg" alt="John Doe">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title font-size-16">
                                                                    <a href="#" class="">
                                                                        Joel Mayson
                                                                    </a>
                                                                </h4>
                                                                <span class="email">joelmyason@woloafric.com</span>
                                                            </div>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <ul class="list-items">
                                                                <li class="mb-0">
                                                                    <a href="dashboard.html" class="d-block">
                                                                        <span><i class="la la-bell"></i> Notifications</span>
                                                                        <span class="badge bg-info text-white ml-2 p-1">9+</span>
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-message.html" class="d-block">
                                                                        <span><i class="la la-envelope"></i> Messages</span>
                                                                        <span class="badge bg-info text-white ml-2 p-1">12+</span>
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-settings.html" class="d-block">
                                                                        <i class="la la-gear"></i> Settings
                                                                    </a>
                                                                </li>

                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="student-detail.html" class="d-block">
                                                                        <i class="la la-user"></i>  Profile
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-settings.html" class="d-block">
                                                                        <i class="la la-edit"></i> Edit Profile
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="#" class="d-block">
                                                                        <i class="la la-question"></i> Help
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="{{ route('logout') }}" class="d-block">
                                                                        <i class="la la-power-off"></i> Logout
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li>
                                                                    <div class="business-content">
                                                                        <a href="#">
                                                                            <span class="widget-title font-size-18 d-block">Access Our Premium</span>
                                                                            {{--                                                                            <span class="line-height-24 d-block primary-color-3 font-size-14">Bring learning to your company</span>--}}
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end mess__body -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end logo-right-button -->
                            <div class="user-nav-container">
                                <div class="user-nav-container">
                                    <div class="humburger-menu">
                                        <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
                                    </div><!-- end humburger-menu -->
                                    <div class="section-tab section-tab-2">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation">
                                                <a href="#notification-home" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                                    Notifications
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#message-home" role="tab" data-toggle="tab" aria-selected="false">
                                                    Messages
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#account-home" role="tab" data-toggle="tab" aria-selected="false">
                                                    Account
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="user-panel-content">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="notification-home" role="tabpanel">
                                                <div class="user-sidebar-item">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__body">
                                                            <a href="dashboard.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="icon-element bg-color-2 text-white">
                                                                        <i class="la la-lock"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <span class="time">October 14, 2020</span>
                                                                        <p class="text">You changed password</p>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                        </div><!-- end mess__body -->
                                                        <div class="btn-box p-2 text-center">
                                                            <a href="dashboard.html">Show All Notifications</a>
                                                        </div><!-- end btn-box -->
                                                    </div><!-- end mess-dropdown -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="message-home" role="tabpanel">
                                                <div class="user-sidebar-item">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__body">
                                                            <a href="dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status online-status">
                                                                        <img src="asset_home/images/team8.jpg" alt="Team img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Emma Wayson</h4>
                                                                        <p class="text">Thanks for reaching out. I will solve it and get back to you.</p>
                                                                        <span class="time">2 days ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                        </div><!-- end mess__body -->
                                                        <div class="btn-box p-2 text-center">
                                                            <a href="dashboard-message.html">Show All Message</a>
                                                        </div><!-- end btn-box -->
                                                    </div><!-- end mess-dropdown -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="account-home" role="tabpanel">
                                                <div class="user-sidebar-item user-action-item">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title d-flex align-items-center">
                                                            <div class="image">
                                                                <a href="#">
                                                                    <img src="asset_home/images/team7.jpg" alt="John Doe">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title font-size-16">
                                                                    <a href="#" class="">
                                                                        Joel Mayson
                                                                    </a>
                                                                </h4>
                                                                <span class="email">joelmyason@woloafric.com</span>
                                                            </div>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <ul class="list-items">

                                                                <li class="mb-0">
                                                                    <a href="#" class="d-block">
                                                                        <i class="la la-shopping-cart"></i> Purchase paths
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-purchase-history.html" class="d-block">
                                                                        <i class="la la-cart-plus"></i> Purchase history
                                                                    </a>
                                                                </li>

                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard.html" class="d-block">
                                                                        <span><i class="la la-bell"></i> Notifications</span>
                                                                        <span class="badge bg-info text-white ml-2 p-1">9+</span>
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-message.html" class="d-block">
                                                                        <span><i class="la la-envelope"></i> Messages</span>
                                                                        <span class="badge bg-info text-white ml-2 p-1">12+</span>
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-settings.html" class="d-block">
                                                                        <i class="la la-gear"></i> Settings
                                                                    </a>
                                                                </li>

                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="student-detail.html" class="d-block">
                                                                        <i class="la la-user"></i>  Profile
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-settings.html" class="d-block">
                                                                        <i class="la la-edit"></i> Edit Profile
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="#" class="d-block">
                                                                        <i class="la la-question"></i> Help
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="index.html" class="d-block">
                                                                        <i class="la la-power-off"></i> Logout
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li>
                                                                    <div class="business-content">
                                                                        <a href="#">
                                                                            <span class="widget-title font-size-18 d-block">Access Our Premium</span>
                                                                            {{--                                                                            <span class="line-height-24 d-block primary-color-3 font-size-14">Bring learning to your company</span>--}}
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end mess__body -->
                                                    </div><!-- end mess-dropdown -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-tab section-tab-2">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation">
                                            <a href="#notification-home" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                                Notifications
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#message-home" role="tab" data-toggle="tab" aria-selected="false">
                                                Messages
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#account-home" role="tab" data-toggle="tab" aria-selected="false">
                                                Account
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="user-panel-content">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="notification-home" role="tabpanel">
                                            <div class="user-sidebar-item">
                                                <div class="mess-dropdown">
                                                    <div class="mess__body">
{{--                                                        <a href="dashboard.html" class="d-block">--}}
{{--                                                            <div class="mess__item">--}}
{{--                                                                <div class="icon-element bg-color-1 text-white">--}}
{{--                                                                    <i class="la la-bolt"></i>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="content">--}}
{{--                                                                    <span class="time">1 hour ago</span>--}}
{{--                                                                    <p class="text">Your Resume Updated!</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div><!-- end mess__item -->--}}
{{--                                                        </a>--}}
{{--                                                        --}}
                                                    </div><!-- end mess__body -->
                                                    <div class="btn-box p-2 text-center">
                                                        <a href="dashboard.html">Show All Notifications</a>
                                                    </div><!-- end btn-box -->
                                                </div><!-- end mess-dropdown -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="message-home" role="tabpanel">
                                            <div class="user-sidebar-item">
                                                <div class="mess-dropdown">
                                                    <div class="mess__body">
{{--                                                        <a href="dashboard-message.html" class="d-block">--}}
{{--                                                            <div class="mess__item">--}}
{{--                                                                <div class="avatar dot-status">--}}
{{--                                                                    <img src="asset_home/images/team7.jpg" alt="Team img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="content">--}}
{{--                                                                    <h4 class="widget-title">Michelle Moreno</h4>--}}
{{--                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>--}}
{{--                                                                    <span class="time">5 min ago</span>--}}
{{--                                                                </div>--}}
{{--                                                            </div><!-- end mess__item -->--}}
{{--                                                        </a>--}}
                                                    </div><!-- end mess__body -->
                                                    <div class="btn-box p-2 text-center">
                                                        <a href="dashboard-message.html">Show All Message</a>
                                                    </div><!-- end btn-box -->
                                                </div><!-- end mess-dropdown -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-home" role="tabpanel">
                                            <div class="user-sidebar-item user-action-item">
                                                <div class="mess-dropdown">

                                                </div><!-- end mess-dropdown -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-trigger">
            <div class="dashboard-nav-trigger-btn">
                <i class="la la-bars"></i> Dashboard
            </div>
        </div>
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">

                    <li class="sidenav__item page-active"><a href="dashboard.html"><i class="la la-dashboard"></i> Dashboard</a></li>
                    <li class="sidenav__item"><a href="dashboard-message.html"><i class="la la-comment"></i>Chat<span class="badge badge-info radius-rounded p-1 ml-1">2</span></a></li>
                    <li class="sidenav__item"><a href="dashboard-profile.html"><i class="la la-pencil"></i>Enroll Subject</a></li>
                    <li class="sidenav__item"><a href="dashboard-courses.html"><i class="la la-file-video-o"></i>All Subject</a></li>
                    <li class="sidenav__item"><a href="dashboard-courses.html"><i class="la la-file-video-o"></i>Subject Subscription</a></li>
                        <li class="sidenav__item"><a href="dashboard-courses.html"><i class="la la-bars"></i>Add Learning Path</a></li>
                        <li class="sidenav__item"><a href="dashboard-courses.html"><i class="la la-bars"></i>All Learning Path</a></li>
                    <li class="sidenav__item"><a href="dashboard-courses.html"><i class="la la-bars"></i>Learning Path Subscription</a></li>
                    <li class="sidenav__item"><a href="dashboard-quiz.html"><i class="la la-question-circle"></i>Submit Quiz</a></li>
                    <li class="sidenav__item"><a href="dashboard-quiz.html"><i class="la la-question-circle"></i>All Quiz</a></li>
                    <li class="sidenav__item"><a href="dashboard-bookmark.html"><i class="la la-question-circle"></i>Submit Exercise</a></li>
                    <li class="sidenav__item"><a href="dashboard-bookmark.html"><i class="la la-bookmark"></i>All Exercise</a></li>
                    <li class="sidenav__item"><a href="dashboard-reviews.html"><i class="la la-star"></i>Reviews</a></li>
                    <li class="sidenav__item"><a href="dashboard-earnings.html"><i class="la la-dollar"></i>Earnings</a></li>
                    <li class="sidenav__item"><a href="dashboard-settings.html"><i class="la la-cog"></i>Settings</a></li>
                    <li class="sidenav__item"><a href="index.html"><i class="la la-power-off"></i> Logout</a></li>
                    <li class="sidenav__item"><a href="javascript:void(0)" data-toggle="modal" data-target=".account-delete-modal" ><i class="la la-trash"></i> Delete Account</a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
        </div>
    </div><!-- end dashboard-sidebar -->
    @yield('content')
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- account-delete-modal -->
<div class="modal-form text-center">
    <div class="modal fade account-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-4">
                <div class="modal-top border-0 mb-4 p-0">
                    <div class="alert-content">
                        <span class="la la-exclamation-circle warning-icon"></span>
                        <h4 class="widget-title font-size-20 mt-2 mb-1">Your account will be deleted permanently!</h4>
                        <p class="modal-sub">Are you sure to proceed.</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="theme-btn bg-color-6 border-0 text-white" >Delete</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<!-- template js files -->
<script src="asset_home/js/jquery-3.4.1.min.js"></script>
<script src="asset_home/js/popper.min.js"></script>
<script src="asset_home/js/bootstrap.min.js"></script>
<script src="asset_home/js/bootstrap-select.min.js"></script>
<script src="asset_home/js/owl.carousel.min.js"></script>
<script src="asset_home/js/magnific-popup.min.js"></script>
<script src="asset_home/js/isotope.js"></script>
<script src="asset_home/js/jquery.counterup.min.js"></script>
<script src="asset_home/js/fancybox.js"></script>
<script src="asset_home/js/wow.js"></script>
<script src="asset_home/js/chart.js"></script>
<script src="asset_home/js/doughnut-chart.js"></script>
<script src="asset_home/js/bar-chart.js"></script>
<script src="asset_home/js/line-chart.js"></script>
<script src="asset_home/js/smooth-scrolling.js"></script>
<script src="asset_home/js/tooltipster.bundle.min.js"></script>
<script src="asset_home/js/jquery.filer.min.js"></script>
<script src="asset_home/js/jquery.vmap.js"></script>
<script src="asset_home/js/jquery.vmap.world.js"></script>
<script src="asset_home/js/jquery.vmap.sampledata.js"></script>
<script src="asset_home/js/jquery.vmap-script.js"></script>
<script src="asset_home/js/progress-bar.js"></script>
<script src="asset_home/js/date-time-picker.js"></script>
<script src="asset_home/js/emojionearea.min.js"></script>
<script src="asset_home/js/animated-skills.js"></script>
<script src="asset_home/js/main.js"></script>
</body>
</html>
