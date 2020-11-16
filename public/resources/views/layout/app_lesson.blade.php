<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Wolo -  Student Lesson</title>

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
    <link rel="stylesheet" href="asset_home/css/jquery.filer.css">
    <link rel="stylesheet" href="asset_home/css/plyr.css">
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
                        <a href="#" class="logo" title="Wolo"><img src="asset_home/images/logo_footer.png" alt="logo"></a>
                    </div>
                    <div class="course-dashboard-title">
                        <a href="#">The Complete Lesson on Set and Operations</a>
                    </div>
                    <div class="menu-wrapper">
                        <div class="logo-right-button">
                            <ul class="d-flex align-items-center">
                                <li><a href="#" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".rating-modal-form"><i class="la la-star mr-1"></i>rate lesson</a></li>
                                <li><a href="#" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".share-modal-form"><i class="la la-share mr-1"></i>share</a></li>
                                <li>
                                    <div class="msg-action-dot">
                                        <div class="dropdown">
                                            <a class="action-dot" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="la la-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Favourite</a></li>
                                                    <li><a class="dropdown-item" href="#">Archive</a></li>
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
<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- end modal-shared -->
<div class="modal-form">
    <div class="modal fade rating-modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-top mb-0">
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                    <h4 class="modal-title widget-title font-size-20">How would you rate this lesson?</h4>
                </div>
                <div class="course-rating-wrap p-4 text-center">
                    <h3 class="widget-title padding-bottom-30px font-size-18">Select Rating</h3>
                    <div class="rating-shared rating-shared-2">
                        <fieldset>
                            <input type="radio" id="star5" name="rating" value="5"><label for="star5" data-toggle="tooltip" data-placement="top" title="Amazing, above expectations!"></label>
                            <input type="radio" id="star4" name="rating" value="4"><label for="star4" data-toggle="tooltip" data-placement="top" title="Good, what i expected"></label>
                            <input type="radio" id="star3" name="rating" value="3"><label for="star3" data-toggle="tooltip" data-placement="top" title="Average, could be better"></label>
                            <input type="radio" id="star2" name="rating" value="2"><label for="star2" data-toggle="tooltip" data-placement="top" title="Poor, pretty disappointed"></label>
                            <input type="radio" id="star1" name="rating" value="1"><label for="star1" data-toggle="tooltip" data-placement="top" title="Awful, not what i expected at all"></label>
                        </fieldset>
                    </div>
                </div><!-- end course-rating-wrap -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->


<div class="modal-form copy-to-clipboard-modal">
    <div class="modal fade share-modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-top mb-0">
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                    <h4 class="modal-title widget-title font-size-20">Share this lesson</h4>
                </div>
                <div class="copy-to-clipboard-wrap p-4 text-center">
                    <div class="copy-to-clipboard mb-3">
                        <div class="contact-form-action d-flex align-items-center">
                            <span class="success-message">Copied!</span>
                            <input type="text" class="form-control copy-input" value="https://www.wolo.com/share/101WxMB0oac1hVQQ==/">
                            <div class="copy-tooltip">
                                <button class="theme-btn theme-btn-light copy-text">Copy</button>
                            </div>
                        </div>
                    </div><!-- end copy-to-clipboard -->
                    <ul class="social-profile">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<!-- end modal-shared -->
<div class="modal-form">
    <div class="modal fade report-modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-top">
                    <div>
                        <h4 class="modal-title widget-title font-size-20"><span class="la la-flag-o mr-1"></span>Report Abuse</h4>
                        <p class="mt-2 font-size-15 line-height-26">
                            Flagged content is reviewed by Aduca staff to determine whether it violates Terms of Service or Community Guidelines.
                            If you have a question or technical issue, please contact our <a href="#" class="primary-color-2">Support team here</a>.
                        </p>
                    </div>
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                </div>
                <div class="contact-form-action">
                    <form method="post">
                        <div class="input-box">
                            <label class="label-text">Select Report Type</label>
                            <div class="form-group">
                                <div class="sort-ordering user-form-short">
                                    <select class="sort-ordering-select">
                                        <option value>-- Select One --</option>
                                        <option value="1">Content</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text">Write Message<span class="primary-color-2 ml-1">*</span></label>
                            <div class="form-group">
                                <i class="la la-pencil input-icon"></i>
                                <textarea class="message-control form-control" name="message" placeholder="Provide additional details here..." required></textarea>
                            </div>
                        </div>
                        <div class="btn-box text-right">
                            <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="theme-btn" >Submit</button>
                        </div>
                    </form>
                </div><!-- end contact-form-action -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->
<!-- end modal-shared -->

<div class="modal-form">
    <div class="modal fade insert-link-modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-top">
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                    <h4 class="modal-title widget-title font-size-20">Insert link</h4>
                </div>
                <div class="contact-form-action">
                    <form action="post">
                        <div class="input-box">
                            <label class="label-text">URL<span class="primary-color-2 ml-1">*</span></label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="text" placeholder="Url">
                                <i class="la la-link input-icon"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text">Text<span class="primary-color-2 ml-1">*</span></label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="text" placeholder="Text">
                                <i class="la la-pencil input-icon"></i>
                            </div>
                        </div>
                        <div class="btn-box text-right">
                            <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="theme-btn" >Insert</button>
                        </div>
                    </form>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<div class="modal-form">
    <div class="modal fade upload-photo-modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-top mb-0">
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                    <h4 class="modal-title widget-title font-size-20">Upload an Image</h4>
                </div>
                <div class="upload-image-box text-center p-3">
                    <i class="la la-photo"></i>
                    <div class="upload-btn-box">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <input type="file" name="files[]" class="filer_input" multiple="multiple">
                        </form>
                    </div>
                    <div class="btn-box text-right">
                        <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="theme-btn">Submit</button>
                    </div>
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
<script src="asset_home/js/waypoint.min.js"></script>
<script src="asset_home/js/jquery.counterup.min.js"></script>
<script src="asset_home/js/fancybox.js"></script>
<script src="asset_home/js/wow.js"></script>
<script src="asset_home/js/plyr.js"></script>
<script src="asset_home/js/smooth-scrolling.js"></script>
<script src="asset_home/js/jquery.filer.min.js"></script>
<script src="asset_home/js/date-time-picker.js"></script>
<script src="asset_home/js/emojionearea.min.js"></script>
<script src="asset_home/js/copy-text-script.js"></script>
<script src="asset_home/js/tooltipster.bundle.min.js"></script>
<script src="asset_home/js/main.js"></script>
<script>
    var player = new Plyr('#player');
</script>
</body>
</html>
