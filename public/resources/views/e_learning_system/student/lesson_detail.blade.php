@extends('layout.app_lesson_detail')
@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area breadcrumb-detail-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content breadcrumb-detail-content">
                        <div class="section-heading">
                            <span class="badge-label">Complete Course</span>
                            <h2 class="section__title mt-1">{{$course -> course_name}}</h2>
                            <h4 class="widget-title mt-2">Statistics and Probability: Frequency Table, Tally, median, Mode, Means, Standard Deviation</h4>
                        </div>
                        <ul class="breadcrumb__list mt-2">
                            <li>Created by <a href="teacher-detail.html">Francis Appiah - Fokuoh</a></li>
                            <li>
                                <i class="la la-star-o"></i>
                                <i class="la la-star-o"></i>
                                <i class="la la-star-o"></i>
                                <i class="la la-star-o"></i>
                                <i class="la la-star-o"></i>

                                0 (0 ratings)
                            </li>
{{--                            <li>173 Students enrolled</li>--}}
                            <li><i class="la la-globe"></i> English</li><br>
                            <li>Last updated 2 October, 2020</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!--======================================
            START COURSE DETAIL
    ======================================-->
    <section class="course-detail margin-bottom-110px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-detail-content-wrap margin-top-100px">
                        <div class="post-overview-card margin-bottom-50px">
                            <h3 class="widget-title">What you'll learn?</h3>
                            <ul class="list-items mt-3">
                                <li><i class="la la-check-circle"></i> Statistics and Probability</li>
                                <li><i class="la la-check-circle"></i> Frequency Table, Tally</li>
                                <li><i class="la la-check-circle"></i> Frequency Table, Tally</li>
                                <li><i class="la la-check-circle"></i>  Frequency Table, Tally</li>
                                <li><i class="la la-check-circle"></i>Frequency Table, Tally</li>
                                <li><i class="la la-check-circle"></i>Statistics and Probability</li>
                                <li><i class="la la-check-circle"></i> Frequency Table, Tally</li>
                                <li><i class="la la-check-circle"></i>Frequency Table, Tally</li>

                            </ul>
                        </div><!-- end post-overview-card -->
                        <div class="requirement-wrap margin-bottom-40px">
                            <h3 class="widget-title">Requirements</h3>
                            <ul class="list-items mt-3">
                                <li>Basic knowledge of digital marketing terms</li>

                            </ul>
                        </div><!-- end requirement-wrap -->
                        <div class="description-wrap margin-bottom-40px">
                            <h3 class="widget-title">Description</h3>
                            <p class="mb-2 mt-3">
                                ...
                            </p>

                        </div><!-- end description-wrap -->

                        <div class="curriculum-wrap margin-bottom-60px">
                            <div class="curriculum-header d-flex align-items-center justify-content-between">
                                <div class="curriculum-header-left">
                                    <h3 class="widget-title">Lesson</h3>
                                </div>
                                <div class="curriculum-header-right">
                                    <span class="curriculum-total__text"><strong>Total:</strong> 17 Sections</span>
                                    <span class="curriculum-total__hours"><strong>Total hours:</strong> 02:35:47</span>
                                </div>
                            </div><!-- end curriculum-header -->
                            <div class="curriculum-content">
                                <div class="accordion accordion-shared" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="fa fa-angle-up"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                    Set and Operations
                                                    <span>18 subtopics </span>
                                                </button>
                                            </h2>
                                        </div><!-- end card-header -->
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul class="list-items">
                                                    <li>
                                                        <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                            <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                            <span class="course-duration">03:07</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" class="d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                            <span><i class="fa fa-play-circle mr-2"></i>General understanding of set</span>
                                                            <span class="course-duration">03:07</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" class="d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                            <span><i class="fa fa-play-circle mr-2"></i>General understanding of set</span>
                                                            <span class="course-duration">03:07</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" class="d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                            <span><i class="fa fa-play-circle mr-2"></i>General understanding of set</span>
                                                            <span class="course-duration">03:07</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-body -->
                                        </div><!-- end collapse -->
                                    </div><!-- end card -->
                                </div><!-- end accordion -->
                            </div><!-- end curriculum-content -->
                        </div><!-- end curriculum-wrap -->
                    </div><!-- end course-detail-content-wrap -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar-component">
                        <div class="sidebar">
                            <div class="sidebar-widget sidebar-preview">
                                <div class="sidebar-preview-titles">
                                    <h3 class="widget-title">Preview this Lesson</h3>
                                </div>
                                <div class="preview-video-and-details">
                                    <div class="preview-course-video">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target=".preview-modal-form">
                                            <img src="asset_home/images/img11.png" alt="course-img">
                                            <div class="play-button">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                   <style type="text/css">
                                                       .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                       .st1{fill:#FFFFFF;}
                                                   </style>
                                                    <g>
                                                        <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                    </g>
                                            </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="preview-course-content">
                                        <p class="preview-course__price d-flex align-items-center">
                                            <span class="price-current">GH70</span>
                                        </p>

                                        <div class="buy-course-btn mb-3 text-center">
                                            <a href="" class="theme-btn w-100 mb-3">buy this lesson</a>
                                            <a href="lesson-details.html" class="theme-btn w-100 theme-btn-light">go to lesson</a>
                                        </div>
                                        <div class="preview-course-incentives">

                                            <h3 class="widget-title font-size-18">This lesson includes</h3>
                                            <ul class="list-items pb-3">
                                                <li><i class="la la-play-circle-o"></i>2.5 hours on-demand video</li>
                                                <li><i class="la la-file"></i>19 Sections</li>
                                                <li><i class="la la-file-text"></i>12 downloadable resources</li>
                                                <li><i class="la la-key"></i>Full lifetime access</li>
                                                <li><i class="la la-television"></i>Access on mobile</li>
                                            </ul>
                                            <div class="section-block"></div>
                                            <div class="video-content-btn d-flex align-items-center justify-content-between pb-3 pt-3">
                                                <button class="btn">
                                                    <i class="la la-heart-o mr-1 bookmark-icon"></i>
                                                    <span class="swapping-btn" data-text-swap="Wishlisted" data-text-original="Wishlist">Wishlist</span>
                                                </button>
                                                <button class="btn" data-toggle="modal" data-target=".share-modal-form">
                                                    <i class="la la-share mr-1"></i>
                                                    <span>Share</span>
                                                </button>
                                            </div>

                                        </div><!-- end preview-course-incentives -->
                                    </div><!-- end preview-course-content -->
                                </div><!-- end preview-video-and-details -->
                            </div><!-- end sidebar-widget -->

                        </div><!-- end sidebar -->
                    </div><!-- end sidebar-component -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end course-detail -->
    <!--======================================
            END COURSE DETAIL
    ======================================-->


@endsection
