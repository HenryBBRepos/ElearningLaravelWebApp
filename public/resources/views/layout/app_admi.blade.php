<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Wolo - Administration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wolo - E-learning platform">

    <!-- Favicon -->
    <link href="asset_home/images/favicon.png" rel="icon" type="image/png">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="asset_admin/css/style.css">
    <link rel="stylesheet" href="asset_admin/night-mode.css">
    <link rel="stylesheet" href="asset_admin/css/framework.css">
    <link rel="stylesheet" href="asset_admin/css/bootstrap.css">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="asset_admin/css/icons.css">
    <style>
        .uil-cloud-download{
            color: #0a0a0a;
        }
    </style>

</head>

<body>

<div id="wrapper" class="admin-panel">

    <!-- menu -->
    <div class="page-menu">
        <!-- btn close on small devices -->
        <span class="btn-menu-close" uk-toggle="target: #wrapper ; cls: mobile-active"></span>
        <!-- traiger btn -->
        <span class="btn-menu-trigger" uk-toggle="target: .page-menu ; cls: menu-large"></span>

        <!-- logo -->
        <div class="logo uk-visible@s">
            <a href=""> <img class=""></i> <span> WOLO</span> </a>
        </div>
        <div class="page-menu-inner" data-simplebar>
            <ul class="mt-0">
                <li><a href=""><i class="uil-home-alt"></i> <span> Dashboard</span></a> </li>

            </ul>

            <ul class="mt-0"  data-submenu-title="Course">
                <li class="#">
                    <a href="#"><i class="uil-plus"></i> 
                    <span>  Add Course
                    </span>
                </a>
                    <ul>
                        <li><a href="#"> SHS<span class="nav-tag">3</span></a>
                        </li>
                        <li><a href="#"> Skills Training</a></li>
                    </ul>
                </li>
                <li class="#">
                    <a href="#"><i class="uil-youtube-alt"></i> 
                    <span>  All Course
                    </span>
                </a>
                    <ul>
                        <li><a href="#"> SHS<span class="nav-tag">3</span></a>
                        </li>
                        <li><a href="#"> Skills Training</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="mt-0" data-submenu-title="People">
                <li><a href=""><i class="uil-users-alt"></i> <span> Student</span></a> </li>
                <li><a href=""><i class="icon-feather-user-check"></i> <span> Teacher</span></a> </li>
                <li><a href=""><i class="icon-feather-user"></i> <span> Agent</span></a> </li>
                <li><a href=""><i class="icon-feather-users"></i> <span> Partner</span></a> </li>



            </ul>


            <ul class="mt-0" data-submenu-title="Subscriptions">
                <li><a href=""><i class="uil-home-alt"></i> <span> Subscriptions</span></a> </li>
                <li><a href=""><i class="uil-tag-alt"></i> <span> Expires</span></a> </li>

            </ul>

            <ul class="mt-0" data-submenu-title="Communication">
                <li><a href=""><i class="uil-bell"></i> <span> Notification</span></a> </li>
                <li><a href=""><i class="uil-envelope-alt"></i> <span> Message</span></a> </li>

            </ul>

            
        </div>
    </div>

    <!-- Header Container
    ================================================== -->
    <header class="header uk-light">

        <div class="container">
            <nav uk-navbar>

                <!-- left Side Content -->
                <div class="uk-navbar-left">

                    <!-- menu icon -->
                    <span class="mmenu-trigger" uk-toggle="target: #wrapper ; cls: mobile-active">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </span>


                    <!-- logo -->
                    <a href="dashboard.html" class="logo">
                        <img src="asset_home/images/logo" alt="">
                        <span> Wolo</span>
                    </a>

                    <div class="searchbox uk-visible@s">

                        <input class="uk-search-input" type="search" placeholder="Search...">
                        <button class="btn-searchbox"> </button>

                    </div>
                    <!-- Search box dropdown -->
                    <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                         class="dropdown-search">
                        <div class="erh BR9 MIw"
                             style="top: -26px;position: absolute ; left: 24px;fill: currentColor;height: 24px;pointer-events: none;color: #f5f5f5;">
                            <svg width="22" height="22">
                                <path d="M0 24 L12 12 L24 24"></path>
                            </svg></div>
                        <!-- User menu -->

                        <ul class="dropdown-search-list">
                            <li class="list-title">
                                Recent Searches
                            </li>
                            <li>
                                <a href="">
                                    Recent search here</a>
                            </li>


                        </ul>

                    </div>
                </div>


                <!--  Right Side Content   -->

                <div class="uk-navbar-right">



                    <div class="header-widget">

                        <!-- notificiation icon  -->

{{--                        <a href="#" class="header-widget-icon"--}}
{{--                           uk-tooltip="title: Notificiation ; pos: bottom ;offset:21">--}}
{{--                            <i class="uil-bell"></i>--}}
{{--                            <span>4</span>--}}
{{--                        </a>--}}

                        <!-- notificiation dropdown -->
{{--                        <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small"--}}
{{--                             class="dropdown-notifications">--}}

{{--                            <!-- notivication header -->--}}
{{--                            <div class="dropdown-notifications-headline">--}}
{{--                                <h4>Notifications </h4>--}}
{{--                                <a href="#">--}}
{{--                                    <i class="icon-feather-settings"--}}
{{--                                       uk-tooltip="title: Notifications settings ; pos: left"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <!-- notification contents -->--}}
{{--                            <div class="dropdown-notifications-content" data-simplebar>--}}

{{--                                <!-- notiviation list -->--}}
{{--                                <ul>--}}
{{--                                    <li class="notifications-not-read">--}}
{{--                                        <a href="#">--}}
{{--                                                <span class="notification-icon btn btn-soft-danger disabled">--}}
{{--                                                    <i class="icon-feather-thumbs-up"></i></span>--}}
{{--                                            <span class="notification-text">--}}
{{--                                                    <strong>Adrian Mohani</strong> Like Your Comment On Course--}}
{{--                                                    <span class="text-primary">Javascript Introduction </span>--}}
{{--                                                    <br> <span class="time-ago"> 9 hours ago </span>--}}
{{--                                                </span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                                <span class="notification-icon btn btn-soft-primary disabled">--}}
{{--                                                    <i class="icon-feather-message-circle"></i></span>--}}
{{--                                            <span class="notification-text">--}}
{{--                                                    <strong>Stella Johnson</strong> Replay Your Comments in--}}
{{--                                                    <span class="text-primary">Programming for Games</span>--}}
{{--                                                    <br> <span class="time-ago"> 12 hours ago </span>--}}
{{--                                                </span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                                <span class="notification-icon btn btn-soft-success disabled">--}}
{{--                                                    <i class="icon-feather-star"></i></span>--}}
{{--                                            <span class="notification-text">--}}
{{--                                                    <strong>Alex Dolgove</strong> Added New Review In Course--}}
{{--                                                    <span class="text-primary">Full Stack PHP Developer</span>--}}
{{--                                                    <br> <span class="time-ago"> 19 hours ago </span>--}}
{{--                                                </span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="notifications-not-read">--}}
{{--                                        <a href="#">--}}
{{--                                                <span class="notification-icon btn btn-soft-danger disabled">--}}
{{--                                                    <i class="icon-feather-share-2"></i></span>--}}
{{--                                            <span class="notification-text">--}}
{{--                                                    <strong>Jonathan Madano</strong> Shared Your Discussion On Course--}}
{{--                                                    <span class="text-primary">Css Flex Box </span>--}}
{{--                                                    <br> <span class="time-ago"> Yesterday </span>--}}
{{--                                                </span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}


{{--                        </div>--}}


                        <!-- Message  -->

{{--                        <a href="#" class="header-widget-icon" uk-tooltip="title: Message ; pos: bottom ;offset:21">--}}
{{--                            <i class="uil-envelope-alt"></i>--}}
{{--                            <span>1</span>--}}
{{--                        </a>--}}

                        <!-- Message  notificiation dropdown -->
{{--                        <div uk-dropdown=" pos: top-right;mode:click" class="dropdown-notifications">--}}

{{--                            <!-- notivication header -->--}}
{{--                            <div class="dropdown-notifications-headline">--}}
{{--                                <h4>Messages</h4>--}}
{{--                                <a href="#">--}}
{{--                                    <i class="icon-feather-settings"--}}
{{--                                       uk-tooltip="title: Message settings ; pos: left"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <!-- notification contents -->--}}
{{--                            <div class="dropdown-notifications-content" data-simplebar>--}}

{{--                                <!-- notiviation list -->--}}
{{--                                <ul>--}}
{{--                                    <li class="notifications-not-read">--}}
{{--                                        <a href="#">--}}
{{--                                                <span class="notification-avatar">--}}
{{--                                                    <img src="asset_admin/images/avatars/avatar-2.jpg" alt="">--}}
{{--                                                </span>--}}
{{--                                            <div class="notification-text notification-msg-text">--}}
{{--                                                <strong>Jonathan Madano</strong>--}}
{{--                                                <p>Okay.. Thanks for The Answer I will be waiting for your...--}}
{{--                                                </p>--}}
{{--                                                <span class="time-ago"> 2 hours ago </span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                                <span class="notification-avatar">--}}
{{--                                                    <img src="asset_admin/images/avatars/avatar-3.jpg" alt="">--}}
{{--                                                </span>--}}
{{--                                            <div class="notification-text notification-msg-text">--}}
{{--                                                <strong>Stella Johnson</strong>--}}
{{--                                                <p> Alex will explain you how to keep the HTML structure and all--}}
{{--                                                    that...</p>--}}
{{--                                                <span class="time-ago"> 7 hours ago </span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                                <span class="notification-avatar">--}}
{{--                                                    <img src="asset_admin/images/avatars/avatar-1.jpg" alt="">--}}
{{--                                                </span>--}}
{{--                                            <div class="notification-text notification-msg-text">--}}
{{--                                                <strong>Alex Dolgove</strong>--}}
{{--                                                <p> Alia Joseph just joined Messenger! Be the first to send a--}}
{{--                                                    welcome message..</p>--}}
{{--                                                <span class="time-ago"> 19 hours ago </span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                                <span class="notification-avatar">--}}
{{--                                                    <img src="asset_admin/images/avatars/avatar-4.jpg" alt="">--}}
{{--                                                </span>--}}
{{--                                            <div class="notification-text notification-msg-text">--}}
{{--                                                <strong>Adrian Mohani</strong>--}}
{{--                                                <p> Okay.. Thanks for The Answer I will be waiting for your...--}}
{{--                                                </p>--}}
{{--                                                <span class="time-ago"> Yesterday </span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}
{{--                            <div class="dropdown-notifications-footer">--}}
{{--                                <a href="#"> sell all <i class="icon-line-awesome-long-arrow-right"></i> </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <!-- profile-icon-->

{{--                        <div class="dropdown-user-details">--}}
{{--                            <div class="dropdown-user-avatar">--}}
{{--                                <img src="asset_admin/images/avatars/avatar-2.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="dropdown-user-name">--}}
{{--                                Richard Ali <span>Adminstrator</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">--}}

{{--                            <!-- User menu -->--}}

{{--                            <ul class="dropdown-user-menu">--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="icon-material-outline-dashboard"></i> Dashboard</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#">--}}
{{--                                        <i class="icon-feather-bookmark"></i> Bookmark </a>--}}
{{--                                </li>--}}
{{--                                <li><a href="profile-edit.html">--}}
{{--                                        <i class="icon-feather-settings"></i> Account Settings</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#" style="color:#62d76b">--}}
{{--                                        <i class="icon-feather-star"></i> Upgrade To Premium</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" id="night-mode" class="btn-night-mode">--}}
{{--                                        <i class="icon-feather-moon"></i> Night mode--}}
{{--                                        <span class="btn-night-mode-switch">--}}
{{--                                                <span class="uk-switch-button"></span>--}}
{{--                                            </span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <ul class="menu-divider">--}}
{{--                                    <li><a href="#">--}}
{{--                                            <i class="icon-feather-help-circle"></i> Help</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="page-login.html">--}}
{{--                                            <i class="icon-feather-log-out"></i> Sing Out</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}


{{--                        </div>--}}


                    </div>



                    <!-- icon search-->
{{--                    <a class="uk-navbar-toggle uk-hidden@s"--}}
{{--                       uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">--}}
{{--                        <i class="uil-search icon-small"></i>--}}
{{--                    </a>--}}
                    <!-- User icons -->
{{--                    <span class="uil-user icon-small uk-hidden@s"--}}
{{--                          uk-toggle="target: .header-widget ; cls: is-active">--}}
{{--                            </span>--}}

                </div>
                <!-- End Right Side Content / End -->


            </nav>

        </div>
        <!-- container  / End -->

    </header>

    <!-- content -->
    <div class="page-content">
        <div class="page-content-inner">

         @yield('content')

            <!-- footer
            ================================================== -->
            <div class="footer">
                <div class="uk-grid-collapse" uk-grid>
                    <div class="uk-width-expand@s uk-first-column">
                        <p>© 2020 <strong>Wolo</strong>. All Rights Reserved. </p>
                    </div>
                    <div class="uk-width-auto@s">
                        <nav class="footer-nav-icon">
                            <ul>
                                <li><a href="#"><i class="icon-brand-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-brand-youtube"></i></a></li>
                                <li><a href="#"><i class="icon-brand-twitter"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);


        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);


        function createNewElement() {
            // First create a DIV element.
            var txtNewInputBox = document.createElement('div');

            // Then add the content (a new input box) of the element.
            txtNewInputBox.innerHTML = "<input type='text' class='uk-input'>";

            // Finally put it where it is supposed to appear.
            document.getElementById("newElementId").appendChild(txtNewInputBox);
        }

        function createNewLessonRow() {
            // First create a DIV element.
            var LessonRow = document.createElement('div');

            // Then add the content (a new input box) of the element.
            LessonRow.innerHTML = " <a class=\"uk-accordion-title\" href=\"#\"> <i class=\"uil-folder\">\n" +
                "                                        </i>Section 1</a>\n" +
                "                                    <div class=\"action-btn\">\n" +
                "                                        <a href=\"#\" onclick=\"createNewLesson();\"> <i class=\"uil-plus\">  </i> Add Section </a>\n" +
                "                                        <a href=\"#\" onclick=\"createNewLessonVid();\"> <i class=\"uil-plus\">  </i> Add Lesson </a>\n" +
                "                                        <a href=\"#\"> <i class=\"uil-plus\">  </i>  Attach View</a>\n" +
                "                                    </div>\n" +
                "                                    <div class=\"uk-accordion-content\">\n" +
                "                                        <ul class=\"sec-list\" uk-sortable=\"handle: .uk-sortable-handle\">\n" +
                "                                            <li>\n" +
                "                                                <div class=\"sec-list-item\">\n" +
                "                                                    <div> <i class=\"uil-list-ul uk-sortable-handle\"></i>\n" +
                "                                                        <div id=\"AddLesson\"></div>\n" +
                "                                                        <div id=\"AddLessonVid\"></div>\n" +
                "\n" +
                "                                                    </div>\n" +
                "                                                    <div>\n" +
                "                                                        <div class=\"btn-act\"> <a href=\"#\">\n" +
                "                                                                <i class=\"uil-cloud-download\"></i></a>\n" +
                "                                                            <a href=\"#\"><i class=\"uil-eye\"></i></a>\n" +
                "                                                            <a href=\"#\"><i class=\"icon-feather-x\"></i></a>\n" +
                "                                                        </div>\n" +
                "                                                    </div>\n" +
                "                                                </div>\n" +
                "                                            </li>\n" +
                "                                        </ul>\n" +
                "                                    </div>";

            // Finally put it where it is supposed to appear.
            document.getElementById("AddLessonRow").appendChild(LessonRow);}

        function createNewLesson() {
            // First create a DIV element.
            var LessonDetail = document.createElement('div');

            // Then add the content (a new input box) of the element.
            LessonDetail.innerHTML = "<input type='text' class='uk-input' placeholder='Enter section'>";

            // Finally put it where it is supposed to appear.
            document.getElementById("AddLesson").appendChild(LessonDetail);}


        function createNewLessonVid() {
            // First create a DIV element.
            var LessonVid = document.createElement('div');

            // Then add the content (a new input box) of the element.
            LessonVid.innerHTML = " <div class=\"uk-width-2-5@m uk-flex-last@m\">\n" +
                "\n" +
                "                        <div class=\"uk-card-default rounded text-center p-4\">\n" +
                "                            <div class=\"uk-position-relative my-4\">\n" +
                "\n" +
                "                                    <div class=\"user-profile-photo  m-auto\">\n" +
                "                                        <img src=\"../assets/images/avatars/home-profile.jpg\" alt=\"\">\n" +
                "                                    </div>\n" +
                "\n" +
                "\n" +
                "                                \n" +
                "                                <div class=\"uk-position-center\">\n" +
                "                                    <div uk-form-custom>\n" +
                "                                        <input type=\"file\">\n" +
                "                                        <span class=\"uk-link uil-cloud-download icon-medium text-white\"> </span>\n" +
                "                                    </div>\n" +
                "\n" +
                "                                </div>\n" +
                "                            </div>\n" +
                "\n" +
                "                            <a class=\"btn btn-default m-auto mb-3\">Save photo</a>\n" +
                "\n" +
                "                        </div>\n" +
                "                    </div>";

            // Finally put it where it is supposed to appear.
            document.getElementById("AddLessonVid").appendChild(LessonVid);
        }
    </script>


    <!-- javaScripts
================================================== -->
    <script src="asset_admin//js/framework.js"></script>
    <script src="asset_admin/js/jquery-3.3.1.min.js"></script>
    <script src="asset_admin/js/simplebar.js"></script>
    <script src="asset_admin/js/main.js"></script>
    <script src="asset_admin/js/bootstrap-select.min.js"></script>



</body>

</html>
