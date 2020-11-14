@extends('layout.app_student')
@section('content')

    <!-- ================================
       START MY COURSES
================================= -->
    <section class="my-courses-area padding-top-30px padding-bottom-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="my-course-content-wrap">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active show" id="subject">
                                <div class="course-alert-info">
                                    <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                                        <i class="la la-users"></i> <a href="#" class="alert-link">Share Wolo with friends</a>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div><!-- end course-alert-info -->
                                <div class="my-course-content-body">
                                    <div class="lecture-overview-item">
                                        <div class="question-overview-filter-wrap my-course-filter-wrap d-flex align-items-center">
                                            <div class="my-course-sort-by-content">
                                                <div class="question-overview-filter-item">
                                                    <span class="badge font-size-14 font-weight-semi-bold">Sort by</span>
                                                    <div class="sort-ordering user-form-short mt-2">
                                                        <select class="sort-ordering-select">
                                                            <option value="0" selected="">course</option>
                                                            <option value="1">General Science</option>
                                                            <option value="2">Business</option>
                                                            <option value="3">General Arts</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end question-overview-filter-item -->
                                            </div><!-- end my-course-sort-by-content -->
                                            <div class="my-course-filter-by-content">
                                                <div class="question-overview-filter-item">
                                                    <span class="badge font-size-14 font-weight-semi-bold">Filter by</span>
                                                    <div class="d-flex align-items-center mt-2">
                                                        <div class="sort-ordering user-form-short">
                                                            <select class="sort-ordering-select">
                                                                <option value="0" selected="">Subject</option>
                                                                <option value="1">Integrated Science</option>
                                                                <option value="2">Core Mathematics</option>
                                                                <option value="3">Social Studies</option>
                                                                <option value="4">English Language</option>

                                                            </select>
                                                        </div>
                                                        <div class="sort-ordering user-form-short">
                                                            <select class="sort-ordering-select">
                                                                <option value="0" selected="">Form</option>
                                                                <option value="1">SHS 1</option>
                                                                <option value="1">SHS 2</option>
                                                                <option value="1">SHS 3</option>

                                                            </select>
                                                        </div>
                                                        <div class="reset-btn-box">
                                                            <button class="theme-btn" type="button">Reset</button>
                                                        </div>
                                                    </div>
                                                </div><!-- end question-overview-filter-item -->
                                            </div><!-- end my-course-filter-by-content -->
                                            <div class="my-course-search-content">
                                                <div class="question-overview-filter-item">
                                                    <span class="badge font-size-14 font-weight-semi-bold">Search</span>
                                                    <div class="contact-form-action mt-2">
                                                        <form method="post">
                                                            <div class="input-box">
                                                                <div class="form-group mb-0">
                                                                    <input class="form-control" type="text" name="search" placeholder="Search subjects">
                                                                    <span class="la la-search search-icon"></span>
                                                                </div>
                                                            </div><!-- end input-box -->
                                                        </form>
                                                    </div><!-- end contact-form-action -->
                                                </div><!-- end question-overview-filter-item -->
                                            </div><!-- end my-course-search-content -->
                                        </div>
                                    </div><!-- end lecture-overview-item -->
                                    <div class="my-course-container">
                                        <div class="row">
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item">
                                                    <div class="card-image">
                                                        <a href="lesson-details.html" class="card__img">
                                                            <img src="asset_home/images/img12.png" alt="">
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
                                                        <div class="msg-action-dot my-course-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot btn" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <ul>
{{--                                                                        <li><p class="dropdown-header pt-0 pb-0 primary-color">Completions</p></li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <p class="dropdown-item">--}}
{{--                                                                                <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">--}}
{{--                                                                                    <span>Javascript</span>--}}
{{--                                                                                    <span class="la la-check collection-icon"></span>--}}
{{--                                                                                </a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <p class="dropdown-item">--}}
{{--                                                                                <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">--}}
{{--                                                                                    <span>Business</span>--}}
{{--                                                                                    <span class="la la-check collection-icon"></span>--}}
{{--                                                                                </a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <div class="section-block mt-2 mb-2"></div>--}}
{{--                                                                        </li>--}}
                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".share-modal-form">
                                                                                Share <i class="ml-auto la la-share"></i>
                                                                            </a>
                                                                        </li>
{{--                                                                        <li>--}}
{{--                                                                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".create-collection-modal-form">--}}
{{--                                                                                Create New Collection <i class="ml-auto la la-plus"></i>--}}
{{--                                                                            </a>--}}
{{--                                                                        </li>--}}
                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                                <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                                <i class="ml-auto la la-star"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                                <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                                <i class="ml-auto la la-archive"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content p-4">
                                                        <h3 class="card__title mt-0">
                                                            <a href="#">Complete Teaching on Organic Chemistry</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="#">by Joseph Mensah</a>
                                                            <span>, head of chermistry department, Accra Academy</span>
                                                        </p>
                                                        <div class="course-complete-bar-2 mt-2">
                                                            <div class="progress-item mb-0">
                                                                <p class="skillbar-title">Complete:</p>
                                                                <div class="skillbar-box mt-1">
                                                                    <div class="skillbar" data-percent="70%">
                                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="skill-bar-percent">70%</div>
                                                            </div>
                                                        </div><!-- end course-complete-bar-2 -->
                                                        <div class="rating-wrap d-flex mt-3">
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target=".rating-modal-form" class="btn rating-btn">
                                                                <i class="la la-star mr-1"></i>Leave a Rating
                                                            </a>
                                                        </div><!-- end rating-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item">
                                                    <div class="card-image">
                                                        <a href="#" class="card__img">
                                                            <img src="asset_home/images/img11.png" alt="">
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
                                                        <div class="msg-action-dot my-course-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot btn" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <ul>

                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".share-modal-form">
                                                                                Share <i class="ml-auto la la-share"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                                <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                                <i class="ml-auto la la-star"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                                <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                                <i class="ml-auto la la-archive"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content p-4">
                                                        <h3 class="card__title mt-0">
                                                            <a href="lesson-details.html">Complete Teaching on Organic Chemistrye</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="teacher-detail.html">by Joseph Mensah</a>
                                                            <span>, head of chermistry department, Accra Academy</span>
                                                        </p>
                                                        <div class="course-complete-bar-2 mt-2">
                                                            <div class="progress-item mb-0">
                                                                <p class="skillbar-title">Complete:</p>
                                                                <div class="skillbar-box mt-1">
                                                                    <div class="skillbar" data-percent="0%">
                                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="skill-bar-percent">0%</div>
                                                            </div>
                                                        </div><!-- end course-complete-bar-2 -->
                                                        <div class="rating-wrap d-flex mt-3">
                                                            <a href="lesson-details.html" class="btn rating-btn">
                                                                <i class="la la-eye mr-1"></i>Start learning
                                                            </a>
                                                        </div><!-- end rating-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->

                                        </div>
                                    </div>
                                    <div class="page-navigation-wrap mt-4 text-center">
                                        <div class="page-navigation-inner d-inline-block">
                                            <div class="page-navigation">
                                                <a href="#" class="page-go page-prev">
                                                    <i class="la la-arrow-left"></i>
                                                </a>
                                                <ul class="page-navigation-nav">
                                                    <li class="active"><a href="#" class="page-go-link">1</a></li>
                                                    <li><a href="#" class="page-go-link">2</a></li>
                                                    <li><a href="#" class="page-go-link">3</a></li>
                                                    <li><a href="#" class="page-go-link">4</a></li>

                                                </ul>
                                                <a href="#" class="page-go page-next">
                                                    <i class="la la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="font-size-14 mt-3">Showing 1-4 of 14 courses</p>
                                    </div><!-- end page-navigation-wrap -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="topic">
                                <div class="course-alert-info">
                                    <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                                        <i class="la la-users"></i> <a href="#" class="alert-link">Share Wolo with friends</a>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div><!-- end course-alert-info -->
                                <div class="my-course-content-body">
                                    <div class="lecture-overview-item">
                                        <div class="question-overview-filter-wrap my-course-filter-wrap d-flex align-items-center">
                                            <div class="my-course-sort-by-content">
                                                <div class="question-overview-filter-item">
                                                    <span class="badge font-size-14 font-weight-semi-bold">Sort by</span>
                                                    <div class="sort-ordering user-form-short mt-2">
                                                        <select class="sort-ordering-select">
                                                            <option value="0" selected="">course</option>
                                                            <option value="1">General Science</option>
                                                            <option value="2">Business</option>
                                                            <option value="3">General Arts</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end question-overview-filter-item -->
                                            </div><!-- end my-course-sort-by-content -->
                                            <div class="my-course-filter-by-content">
                                                <div class="question-overview-filter-item">
                                                    <span class="badge font-size-14 font-weight-semi-bold">Filter by</span>
                                                    <div class="d-flex align-items-center mt-2">
                                                        <div class="sort-ordering user-form-short">
                                                            <select class="sort-ordering-select">
                                                                <option value="0" selected="">Subject</option>
                                                                <option value="1">Integrated Science</option>
                                                                <option value="2">Core Mathematics</option>
                                                                <option value="3">Social Studies</option>
                                                                <option value="4">English Language</option>

                                                            </select>
                                                        </div>
                                                        <div class="sort-ordering user-form-short">
                                                            <select class="sort-ordering-select">
                                                                <option value="0" selected="">Form</option>
                                                                <option value="1">SHS 1</option>
                                                                <option value="1">SHS 2</option>
                                                                <option value="1">SHS 3</option>

                                                            </select>
                                                        </div>
                                                        <div class="reset-btn-box">
                                                            <button class="theme-btn" type="button">Reset</button>
                                                        </div>
                                                    </div>
                                                </div><!-- end question-overview-filter-item -->
                                            </div><!-- end my-course-filter-by-content -->
                                            <div class="my-course-search-content">
                                                <div class="question-overview-filter-item">
                                                    <span class="badge font-size-14 font-weight-semi-bold">Search</span>
                                                    <div class="contact-form-action mt-2">
                                                        <form method="post">
                                                            <div class="input-box">
                                                                <div class="form-group mb-0">
                                                                    <input class="form-control" type="text" name="search" placeholder="Search subjects">
                                                                    <span class="la la-search search-icon"></span>
                                                                </div>
                                                            </div><!-- end input-box -->
                                                        </form>
                                                    </div><!-- end contact-form-action -->
                                                </div><!-- end question-overview-filter-item -->
                                            </div><!-- end my-course-search-content -->
                                        </div>
                                    </div><!-- end lecture-overview-item -->
                                    <div class="my-course-container">
                                        <div class="row">
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                    <div class="card-image">
                                                        <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                        <div class="card-badge">
                                                            <span class="badge-label">Highest Rated</span>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content">
                                                        <p class="card__label">
                                                            <span class="card__label-text">beginner</span>
                                                            <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                        </p>
                                                        <h3 class="card__title">
                                                            <a href="#">The Three Set Problems - Set & Functions</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="#1">Teacher Kwame</a>
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
                                                                <!--                                                    <span class="star__count">(20)</span>-->
                                                </span>
                                                        </div><!-- end rating-wrap -->
                                                        <div class="card-action">
                                                            <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 2 subtopics
                                                        </span>
                                                                </li>
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 1 hours 02 min
                                                        </span>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end card-action -->
                                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                            <span class="card__price">GH5.00</span>
                                                            <a href="#" class="text-btn">Add to cart</a>
                                                        </div><!-- end card-price-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                    <div class="card-image">
                                                        <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                        <div class="card-badge">
                                                            <span class="badge-label">Highest Rated</span>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content">
                                                        <p class="card__label">
                                                            <span class="card__label-text">beginner</span>
                                                            <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                        </p>
                                                        <h3 class="card__title">
                                                            <a href="#">The Three Set Problems - Set & Functions</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="#1">Teacher Kwame</a>
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
                                                                <!--                                                    <span class="star__count">(20)</span>-->
                                                </span>
                                                        </div><!-- end rating-wrap -->
                                                        <div class="card-action">
                                                            <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 2 subtopics
                                                        </span>
                                                                </li>
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 1 hours 02 min
                                                        </span>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end card-action -->
                                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                            <span class="card__price">GH5.00</span>
                                                            <a href="#" class="text-btn">Add to cart</a>
                                                        </div><!-- end card-price-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                    <div class="card-image">
                                                        <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                        <div class="card-badge">
                                                            <span class="badge-label">Highest Rated</span>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content">
                                                        <p class="card__label">
                                                            <span class="card__label-text">beginner</span>
                                                            <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                        </p>
                                                        <h3 class="card__title">
                                                            <a href="#">The Three Set Problems - Set & Functions</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="#1">Teacher Kwame</a>
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
                                                                <!--                                                    <span class="star__count">(20)</span>-->
                                                </span>
                                                        </div><!-- end rating-wrap -->
                                                        <div class="card-action">
                                                            <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 2 subtopics
                                                        </span>
                                                                </li>
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 1 hours 02 min
                                                        </span>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end card-action -->
                                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                            <span class="card__price">GH5.00</span>
                                                            <a href="#" class="text-btn">Add to cart</a>
                                                        </div><!-- end card-price-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                    <div class="card-image">
                                                        <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                        <div class="card-badge">
                                                            <span class="badge-label">Highest Rated</span>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content">
                                                        <p class="card__label">
                                                            <span class="card__label-text">beginner</span>
                                                            <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                        </p>
                                                        <h3 class="card__title">
                                                            <a href="#">The Three Set Problems - Set & Functions</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="#1">Teacher Kwame</a>
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
                                                                <!--                                                    <span class="star__count">(20)</span>-->
                                                </span>
                                                        </div><!-- end rating-wrap -->
                                                        <div class="card-action">
                                                            <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 2 subtopics
                                                        </span>
                                                                </li>
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 1 hours 02 min
                                                        </span>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end card-action -->
                                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                            <span class="card__price">GH5.00</span>
                                                            <a href="#" class="text-btn">Add to cart</a>
                                                        </div><!-- end card-price-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                    <div class="card-image">
                                                        <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                        <div class="card-badge">
                                                            <span class="badge-label">Highest Rated</span>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content">
                                                        <p class="card__label">
                                                            <span class="card__label-text">beginner</span>
                                                            <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                        </p>
                                                        <h3 class="card__title">
                                                            <a href="#">The Three Set Problems - Set & Functions</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="#1">Teacher Kwame</a>
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
                                                                <!--                                                    <span class="star__count">(20)</span>-->
                                                </span>
                                                        </div><!-- end rating-wrap -->
                                                        <div class="card-action">
                                                            <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 2 subtopics
                                                        </span>
                                                                </li>
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 1 hours 02 min
                                                        </span>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end card-action -->
                                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                            <span class="card__price">GH5.00</span>
                                                            <a href="#" class="text-btn">Add to cart</a>
                                                        </div><!-- end card-price-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                    <div class="card-image">
                                                        <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                        <div class="card-badge">
                                                            <span class="badge-label">Highest Rated</span>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content">
                                                        <p class="card__label">
                                                            <span class="card__label-text">beginner</span>
                                                            <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                        </p>
                                                        <h3 class="card__title">
                                                            <a href="#">The Three Set Problems - Set & Functions</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="#1">Teacher Kwame</a>
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
                                                                <!--                                                    <span class="star__count">(20)</span>-->
                                                </span>
                                                        </div><!-- end rating-wrap -->
                                                        <div class="card-action">
                                                            <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 2 subtopics
                                                        </span>
                                                                </li>
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 1 hours 02 min
                                                        </span>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end card-action -->
                                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                            <span class="card__price">GH5.00</span>
                                                            <a href="#" class="text-btn">Add to cart</a>
                                                        </div><!-- end card-price-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                    <div class="card-image">
                                                        <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                        <div class="card-badge">
                                                            <span class="badge-label">Highest Rated</span>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content">
                                                        <p class="card__label">
                                                            <span class="card__label-text">beginner</span>
                                                            <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                        </p>
                                                        <h3 class="card__title">
                                                            <a href="#">The Three Set Problems - Set & Functions</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="#1">Teacher Kwame</a>
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
                                                                <!--                                                    <span class="star__count">(20)</span>-->
                                                </span>
                                                        </div><!-- end rating-wrap -->
                                                        <div class="card-action">
                                                            <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 2 subtopics
                                                        </span>
                                                                </li>
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 1 hours 02 min
                                                        </span>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end card-action -->
                                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                            <span class="card__price">GH5.00</span>
                                                            <a href="#" class="text-btn">Add to cart</a>
                                                        </div><!-- end card-price-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                    <div class="card-image">
                                                        <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                        <div class="card-badge">
                                                            <span class="badge-label">Highest Rated</span>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content">
                                                        <p class="card__label">
                                                            <span class="card__label-text">beginner</span>
                                                            <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                        </p>
                                                        <h3 class="card__title">
                                                            <a href="#">The Three Set Problems - Set & Functions</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="#1">Teacher Kwame</a>
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
                                                                <!--                                                    <span class="star__count">(20)</span>-->
                                                </span>
                                                        </div><!-- end rating-wrap -->
                                                        <div class="card-action">
                                                            <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 2 subtopics
                                                        </span>
                                                                </li>
                                                                <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 1 hours 02 min
                                                        </span>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end card-action -->
                                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                            <span class="card__price">GH5.00</span>
                                                            <a href="#" class="text-btn">Add to cart</a>
                                                        </div><!-- end card-price-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->



                                        </div>
                                    </div>
                                    <div class="page-navigation-wrap mt-4 text-center">
                                        <div class="page-navigation-inner d-inline-block">
                                            <div class="page-navigation">
                                                <a href="#" class="page-go page-prev">
                                                    <i class="la la-arrow-left"></i>
                                                </a>
                                                <ul class="page-navigation-nav">
                                                    <li class="active"><a href="#" class="page-go-link">1</a></li>
                                                    <li><a href="#" class="page-go-link">2</a></li>
                                                    <li><a href="#" class="page-go-link">3</a></li>
                                                    <li><a href="#" class="page-go-link">4</a></li>

                                                </ul>
                                                <a href="#" class="page-go page-next">
                                                    <i class="la la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="font-size-14 mt-3">Showing 1-4 of 14 courses</p>
                                    </div><!-- end page-navigation-wrap -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="learning_path">
                                <div class="course-alert-info">
                                    <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                                        <i class="la la-users"></i> <a href="#" class="alert-link">Share Wolo with friends</a>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div><!-- end course-alert-info -->
                                <div class="my-course-content-body">
                                    <div class="lecture-overview-item">
                                        <div class="question-overview-filter-wrap my-course-filter-wrap d-flex align-items-center">
                                            <div class="my-course-sort-by-content">
                                                <div class="question-overview-filter-item">
                                                    <span class="badge font-size-14 font-weight-semi-bold">Sort by</span>
                                                    <div class="sort-ordering user-form-short mt-2">
                                                        <select class="sort-ordering-select">
                                                            <option value="0" selected="">course</option>
                                                            <option value="1">General Science</option>
                                                            <option value="2">Business</option>
                                                            <option value="3">General Arts</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end question-overview-filter-item -->
                                            </div><!-- end my-course-sort-by-content -->
                                            <div class="my-course-filter-by-content">
                                                <div class="question-overview-filter-item">
                                                    <span class="badge font-size-14 font-weight-semi-bold">Filter by</span>
                                                    <div class="d-flex align-items-center mt-2">
                                                        <div class="sort-ordering user-form-short">
                                                            <select class="sort-ordering-select">
                                                                <option value="0" selected="">Subject</option>
                                                                <option value="1">Integrated Science</option>
                                                                <option value="2">Core Mathematics</option>
                                                                <option value="3">Social Studies</option>
                                                                <option value="4">English Language</option>

                                                            </select>
                                                        </div>
                                                        <div class="sort-ordering user-form-short">
                                                            <select class="sort-ordering-select">
                                                                <option value="0" selected="">Form</option>
                                                                <option value="1">SHS 1</option>
                                                                <option value="1">SHS 2</option>
                                                                <option value="1">SHS 3</option>

                                                            </select>
                                                        </div>
                                                        <div class="reset-btn-box">
                                                            <button class="theme-btn" type="button">Reset</button>
                                                        </div>
                                                    </div>
                                                </div><!-- end question-overview-filter-item -->
                                            </div><!-- end my-course-filter-by-content -->
                                            <div class="my-course-search-content">
                                                <div class="question-overview-filter-item">
                                                    <span class="badge font-size-14 font-weight-semi-bold">Search</span>
                                                    <div class="contact-form-action mt-2">
                                                        <form method="post">
                                                            <div class="input-box">
                                                                <div class="form-group mb-0">
                                                                    <input class="form-control" type="text" name="search" placeholder="Search subjects">
                                                                    <span class="la la-search search-icon"></span>
                                                                </div>
                                                            </div><!-- end input-box -->
                                                        </form>
                                                    </div><!-- end contact-form-action -->
                                                </div><!-- end question-overview-filter-item -->
                                            </div><!-- end my-course-search-content -->
                                        </div>
                                    </div><!-- end lecture-overview-item -->
                                    <div class="my-course-container">
                                        <div class="row">

                                            <div class="col-lg-6 column-td-half">
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
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>




                                                                    </ul>
                                                                </div><!-- end card-body -->
                                                            </div><!-- end collapse -->
                                                        </div><!-- end card -->

                                                    </div><!-- end accordion -->
                                                </div><!-- end curriculum-content -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-6 column-td-half">
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
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>




                                                                    </ul>
                                                                </div><!-- end card-body -->
                                                            </div><!-- end collapse -->
                                                        </div><!-- end card -->

                                                    </div><!-- end accordion -->
                                                </div><!-- end curriculum-content -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-6 column-td-half">
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
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>




                                                                    </ul>
                                                                </div><!-- end card-body -->
                                                            </div><!-- end collapse -->
                                                        </div><!-- end card -->

                                                    </div><!-- end accordion -->
                                                </div><!-- end curriculum-content -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-6 column-td-half">
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
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>




                                                                    </ul>
                                                                </div><!-- end card-body -->
                                                            </div><!-- end collapse -->
                                                        </div><!-- end card -->

                                                    </div><!-- end accordion -->
                                                </div><!-- end curriculum-content -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-6 column-td-half">
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
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>




                                                                    </ul>
                                                                </div><!-- end card-body -->
                                                            </div><!-- end collapse -->
                                                        </div><!-- end card -->

                                                    </div><!-- end accordion -->
                                                </div><!-- end curriculum-content -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-6 column-td-half">
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
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>




                                                                    </ul>
                                                                </div><!-- end card-body -->
                                                            </div><!-- end collapse -->
                                                        </div><!-- end card -->

                                                    </div><!-- end accordion -->
                                                </div><!-- end curriculum-content -->
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-6 column-td-half">
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
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="javascript:void(0)" class="primary-color-2 d-flex align-items-center justify-content-between" data-toggle="modal" data-target=".preview-modal-form">
                                                                                <span><i class="fa fa-play-circle mr-2"></i>General understanding of set <span class="badge-label">Preview</span></span>
                                                                                <span class="course-duration">03:07</span>
                                                                            </a>
                                                                        </li>




                                                                    </ul>
                                                                </div><!-- end card-body -->
                                                            </div><!-- end collapse -->
                                                        </div><!-- end card -->

                                                    </div><!-- end accordion -->
                                                </div><!-- end curriculum-content -->
                                            </div><!-- end col-lg-4 -->


                                        </div>
                                    </div>
                                    <div class="page-navigation-wrap mt-4 text-center">
                                        <div class="page-navigation-inner d-inline-block">
                                            <div class="page-navigation">
                                                <a href="#" class="page-go page-prev">
                                                    <i class="la la-arrow-left"></i>
                                                </a>
                                                <ul class="page-navigation-nav">
                                                    <li class="active"><a href="#" class="page-go-link">1</a></li>
                                                    <li><a href="#" class="page-go-link">2</a></li>
                                                    <li><a href="#" class="page-go-link">3</a></li>
                                                    <li><a href="#" class="page-go-link">4</a></li>

                                                </ul>
                                                <a href="#" class="page-go page-next">
                                                    <i class="la la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="font-size-14 mt-3">Showing 1-4 of 14 courses</p>
                                    </div><!-- end page-navigation-wrap -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="exercise">
                                <div class="course-alert-info">
                                    <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                                        <i class="la la-users"></i> <a href="#" class="alert-link">Share Wolo with friends</a>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div><!-- end course-alert-info -->
                                <div class="my-course-content-body">

                                    <div class="my-course-container">
                                        <div class="row mt-5">
                                            <div class="col-lg-12">
                                                <div class="card-box-shared">
                                                    <div class="card-box-shared-title">
                                                        <h3 class="widget-title">My Exercise Attempts</h3>
                                                    </div>
                                                    <div class="card-box-shared-body">
                                                        <div class="statement-table purchase-table table-responsive mb-5">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Exercise Information</th>
                                                                    <th scope="col">Questions</th>
                                                                    <th scope="col">Total Marks</th>
                                                                    <th scope="col">Earned Marks</th>
                                                                    <th scope="col">Pass Marks</th>
                                                                    <th scope="col">Exercise Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-success text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-success text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-success text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-success text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-danger text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </div>
                                    <div class="page-navigation-wrap mt-4 text-center">
                                        <div class="page-navigation-inner d-inline-block">
                                            <div class="page-navigation">
                                                <a href="#" class="page-go page-prev">
                                                    <i class="la la-arrow-left"></i>
                                                </a>
                                                <ul class="page-navigation-nav">
                                                    <li class="active"><a href="#" class="page-go-link">1</a></li>
                                                    <li><a href="#" class="page-go-link">2</a></li>
                                                    <li><a href="#" class="page-go-link">3</a></li>
                                                    <li><a href="#" class="page-go-link">4</a></li>

                                                </ul>
                                                <a href="#" class="page-go page-next">
                                                    <i class="la la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="font-size-14 mt-3">Showing 1-4 of 14 courses</p>
                                    </div><!-- end page-navigation-wrap -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="quiz">
                                <div class="course-alert-info">
                                    <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                                        <i class="la la-users"></i> <a href="#" class="alert-link">Share Wolo with friends</a>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div><!-- end course-alert-info -->
                                <div class="my-course-content-body">

                                    <div class="my-course-container">
                                        <div class="row mt-5">
                                            <div class="col-lg-12">
                                                <div class="card-box-shared">
                                                    <div class="card-box-shared-title">
                                                        <h3 class="widget-title">My Quiz Attempts</h3>
                                                    </div>
                                                    <div class="card-box-shared-body">
                                                        <div class="statement-table purchase-table table-responsive mb-5">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Exercise Information</th>
                                                                    <th scope="col">Questions</th>
                                                                    <th scope="col">Total Marks</th>
                                                                    <th scope="col">Earned Marks</th>
                                                                    <th scope="col">Pass Marks</th>
                                                                    <th scope="col">Quiz Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-success text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-success text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-success text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-success text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-danger text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="course-details.html" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </div>
                                    <div class="page-navigation-wrap mt-4 text-center">
                                        <div class="page-navigation-inner d-inline-block">
                                            <div class="page-navigation">
                                                <a href="#" class="page-go page-prev">
                                                    <i class="la la-arrow-left"></i>
                                                </a>
                                                <ul class="page-navigation-nav">
                                                    <li class="active"><a href="#" class="page-go-link">1</a></li>
                                                    <li><a href="#" class="page-go-link">2</a></li>
                                                    <li><a href="#" class="page-go-link">3</a></li>
                                                    <li><a href="#" class="page-go-link">4</a></li>

                                                </ul>
                                                <a href="#" class="page-go page-next">
                                                    <i class="la la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="font-size-14 mt-3">Showing 1-4 of 14 courses</p>
                                    </div><!-- end page-navigation-wrap -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="exam">
                                <div class="course-alert-info">
                                    <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                                        <i class="la la-users"></i> <a href="#" class="alert-link">Share Wolo with friends</a>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div><!-- end course-alert-info -->
                                <div class="my-course-content-body">

                                    <div class="my-course-container">
                                        <div class="row mt-5">
                                            <div class="col-lg-12">
                                                <div class="card-box-shared">
                                                    <div class="card-box-shared-title">
                                                        <h3 class="widget-title">My Exam Attempts</h3>
                                                    </div>
                                                    <div class="card-box-shared-body">
                                                        <div class="statement-table purchase-table table-responsive mb-5">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Exam Information</th>
                                                                    <th scope="col">Questions</th>
                                                                    <th scope="col">Total Marks</th>
                                                                    <th scope="col">Earned Marks</th>
                                                                    <th scope="col">Pass Marks</th>
                                                                    <th scope="col">Quiz Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <span class="badge bg-success text-white p-1">Passed</span>
                                                                                    <span>October 22, 2020 10:50am</span>
                                                                                </li>
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="primary-color">100 objective questions: quiz on the topic self identity</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>100</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>6.00(60%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li>50(50%)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="statement-info">
                                                                            <ul class="list-items">
                                                                                <li class="mb-1">
                                                                                    <a href="#" class="btn-sm retry_color">Retry</a>
                                                                                    <a href="#" class="btn-sm archive_color">Archive</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </div>
                                    <div class="page-navigation-wrap mt-4 text-center">
                                        <div class="page-navigation-inner d-inline-block">
                                            <div class="page-navigation">
                                                <a href="#" class="page-go page-prev">
                                                    <i class="la la-arrow-left"></i>
                                                </a>
                                                <ul class="page-navigation-nav">
                                                    <li class="active"><a href="#" class="page-go-link">1</a></li>
                                                    <li><a href="#" class="page-go-link">2</a></li>
                                                    <li><a href="#" class="page-go-link">3</a></li>
                                                    <li><a href="#" class="page-go-link">4</a></li>

                                                </ul>
                                                <a href="#" class="page-go page-next">
                                                    <i class="la la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="font-size-14 mt-3">Showing 1-4 of 14 courses</p>
                                    </div><!-- end page-navigation-wrap -->
                                </div>
                            </div><!-- end tab-pane -->

                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end my-courses-area -->
    <!-- ================================
           START MY COURSES
    ================================= -->

@endsection
