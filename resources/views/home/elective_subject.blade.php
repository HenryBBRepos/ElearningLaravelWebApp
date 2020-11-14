@extends('layout.app_index')

@section('content')



    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <br><br>
    <section class="">
        <div class="container">
            <div class="contact-form-action">
                <div class="course-alert-info">
                    <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                        <i class="la la-users"></i> <a href="#" class="alert-link">Share Wolo with friends</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div><!-- end course-alert-info -->
            </div><!-- end contact-form-action -->

        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!--======================================
            START COURSE AREA
    ======================================-->
    <section class="course-area padding-top-10px padding-bottom-120px">
        <div class="course-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filter-bar d-flex justify-content-between align-items-center">
                            <ul class="filter-bar-tab nav nav-tabs align-items-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active icon-element" id="grid-view-tab" data-toggle="tab" href="#grid-view" role="tab" aria-controls="grid-view" aria-selected="true">
                                    <span data-toggle="tooltip" data-placement="top" title="Grid View">
                                        <i class="la la-th-large"></i>
                                    </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-element" id="list-view-tab" data-toggle="tab" href="#list-view" role="tab" aria-controls="list-view" aria-selected="false">
                                   <span data-toggle="tooltip" data-placement="top" title="List View">
                                        <i class="la la-th-list"></i>
                                   </span>
                                    </a>
                                </li>
                                <li class="nav-item font-size-15">Showing 1-5 of 100 results</li>
                            </ul>
                            <div class="sort-ordering">
                                <select class="sort-ordering-select">
                                    <option value="selected">Elective Subjects</option>
                                    <option value="1">General Science</option>
                                    <option value="2">Business</option>
                                    <option value="3">General Arts</option>

                                </select>
                            </div><!-- end sort-ordering -->
                        </div><!-- end filter-bar -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->

                <div class="course-content-wrapper mt-4">

                    <div class="lecture-overview-item">
                        <div class="question-overview-filter-wrap my-course-filter-wrap d-flex align-items-center">
                            <div class="my-course-sort-by-content">
                                <div class="question-overview-filter-item">
                                    <span class="badge font-size-14 font-weight-semi-bold">Sort by</span>
                                    <div class="sort-ordering user-form-short mt-2">
                                        <select class="sort-ordering-select">
                                            <option value="0" selected="">Form</option>
                                            <option value="1">SHS 1</option>
                                            <option value="1">SHS 2</option>
                                            <option value="1">SHS 3</option>

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
                                                <option value="1">Physics</option>
                                                <option value="1">Elective Mathematics</option>
                                                <option value="1">Chemistry</option>
                                                <option value="1">Biology</option>


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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view" aria-labelledby="grid-view-tab">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                <div class="card-image">
                                                    <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                    <div class="card-badge">
                                                        <span class="badge-label">General Science</span>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content">
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
                                                        <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                    </div><!-- end rating-wrap -->
                                                    <h3 class="card__title">
                                                        <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="#1">Francis Appiah  - Fokuoh</a>
                                                    </p>

                                                    {{--                                        <div class="card-action">--}}
                                                    {{--                                            <ul class="card-duration d-flex justify-content-between align-items-center">--}}
                                                    {{--                                                <li>--}}
                                                    {{--                                                        <span class="meta__date">--}}
                                                    {{--                                                           SHS2--}}
                                                    {{--                                                            <i class="la la-play-circle"></i> 2 subtopics--}}
                                                    {{--                                                        </span>--}}
                                                    {{--                                                </li>--}}
                                                    {{--                                                <li>--}}
                                                    {{--                                                        <span class="meta__date">--}}
                                                    {{--                                                            BUSINESS--}}

                                                    {{--                                                            <i class="la la-clock-o"></i> 1 hours 02 min--}}
                                                    {{--                                                        </span>--}}
                                                    {{--                                                </li>--}}
                                                    {{--                                            </ul>--}}
                                                    {{--                                        </div><!-- end card-action -->--}}<br>
                                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                        <span class="card__price">GH20.00</span>
                                                        <a href="#" class="text-btn">BUY COURSE</a>
                                                    </div><!-- end card-price-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                <div class="card-image">
                                                    <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                    <div class="card-badge">
                                                        <span class="badge-label">General Science</span>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content">
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
                                                        <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                    </div><!-- end rating-wrap -->
                                                    <h3 class="card__title">
                                                        <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="#1">Francis Appiah  - Fokuoh</a>
                                                    </p>

                                                    {{--                                        <div class="card-action">--}}
                                                    {{--                                            <ul class="card-duration d-flex justify-content-between align-items-center">--}}
                                                    {{--                                                <li>--}}
                                                    {{--                                                        <span class="meta__date">--}}
                                                    {{--                                                           SHS2--}}
                                                    {{--                                                            <i class="la la-play-circle"></i> 2 subtopics--}}
                                                    {{--                                                        </span>--}}
                                                    {{--                                                </li>--}}
                                                    {{--                                                <li>--}}
                                                    {{--                                                        <span class="meta__date">--}}
                                                    {{--                                                            BUSINESS--}}

                                                    {{--                                                            <i class="la la-clock-o"></i> 1 hours 02 min--}}
                                                    {{--                                                        </span>--}}
                                                    {{--                                                </li>--}}
                                                    {{--                                            </ul>--}}
                                                    {{--                                        </div><!-- end card-action -->--}}<br>
                                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                        <span class="card__price">GH20.00</span>
                                                        <a href="#" class="text-btn">BUY COURSE</a>
                                                    </div><!-- end card-price-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                <div class="card-image">
                                                    <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                    <div class="card-badge">
                                                        <span class="badge-label">General Science</span>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content">
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
                                                        <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                    </div><!-- end rating-wrap -->
                                                    <h3 class="card__title">
                                                        <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="#1">Francis Appiah  - Fokuoh</a>
                                                    </p>

                                                    {{--                                        <div class="card-action">--}}
                                                    {{--                                            <ul class="card-duration d-flex justify-content-between align-items-center">--}}
                                                    {{--                                                <li>--}}
                                                    {{--                                                        <span class="meta__date">--}}
                                                    {{--                                                           SHS2--}}
                                                    {{--                                                            <i class="la la-play-circle"></i> 2 subtopics--}}
                                                    {{--                                                        </span>--}}
                                                    {{--                                                </li>--}}
                                                    {{--                                                <li>--}}
                                                    {{--                                                        <span class="meta__date">--}}
                                                    {{--                                                            BUSINESS--}}

                                                    {{--                                                            <i class="la la-clock-o"></i> 1 hours 02 min--}}
                                                    {{--                                                        </span>--}}
                                                    {{--                                                </li>--}}
                                                    {{--                                            </ul>--}}
                                                    {{--                                        </div><!-- end card-action -->--}}<br>
                                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                        <span class="card__price">GH20.00</span>
                                                        <a href="#" class="text-btn">BUY COURSE</a>
                                                    </div><!-- end card-price-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                                <div class="card-image">
                                                    <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                    <div class="card-badge">
                                                        <span class="badge-label">General Science</span>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content">
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
                                                        <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                    </div><!-- end rating-wrap -->
                                                    <h3 class="card__title">
                                                        <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="#1">Francis Appiah  - Fokuoh</a>
                                                    </p>

                                                    {{--                                        <div class="card-action">--}}
                                                    {{--                                            <ul class="card-duration d-flex justify-content-between align-items-center">--}}
                                                    {{--                                                <li>--}}
                                                    {{--                                                        <span class="meta__date">--}}
                                                    {{--                                                           SHS2--}}
                                                    {{--                                                            <i class="la la-play-circle"></i> 2 subtopics--}}
                                                    {{--                                                        </span>--}}
                                                    {{--                                                </li>--}}
                                                    {{--                                                <li>--}}
                                                    {{--                                                        <span class="meta__date">--}}
                                                    {{--                                                            BUSINESS--}}

                                                    {{--                                                            <i class="la la-clock-o"></i> 1 hours 02 min--}}
                                                    {{--                                                        </span>--}}
                                                    {{--                                                </li>--}}
                                                    {{--                                            </ul>--}}
                                                    {{--                                        </div><!-- end card-action -->--}}<br>
                                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                        <span class="card__price">GH20.00</span>
                                                        <a href="#" class="text-btn">BUY COURSE</a>
                                                    </div><!-- end card-price-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->

                                    </div><!-- end course-block -->
                                </div><!-- end tab-pane -->
                                <div role="tabpanel" class="tab-pane fade" id="list-view" aria-labelledby="list-view-tab">
                                    <div class="row">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_0">
                                            <div class="card-image">
                                                <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">General Science</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">

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
                                                    <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                </div><!-- end rating-wrap --><br>
                                                <h3 class="card__title">
                                                    <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="#1">Francis Appiah  - Fokuoh</a>
                                                </p><br><br><br>
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <span class="card__price">GH20.00</span>
                                                    <a href="#" class="text-btn">BUY COURSE</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_0">
                                            <div class="card-image">
                                                <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">General Science</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">

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
                                                    <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                </div><!-- end rating-wrap --><br>
                                                <h3 class="card__title">
                                                    <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="#1">Francis Appiah  - Fokuoh</a>
                                                </p><br><br><br>
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <span class="card__price">GH20.00</span>
                                                    <a href="#" class="text-btn">BUY COURSE</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_0">
                                            <div class="card-image">
                                                <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">General Science</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">

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
                                                    <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                </div><!-- end rating-wrap --><br>
                                                <h3 class="card__title">
                                                    <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="#1">Francis Appiah  - Fokuoh</a>
                                                </p><br><br><br>
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <span class="card__price">GH20.00</span>
                                                    <a href="#" class="text-btn">BUY COURSE</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_0">
                                            <div class="card-image">
                                                <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">General Science</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">

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
                                                    <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                </div><!-- end rating-wrap --><br>
                                                <h3 class="card__title">
                                                    <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="#1">Francis Appiah  - Fokuoh</a>
                                                </p><br><br><br>
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <span class="card__price">GH20.00</span>
                                                    <a href="#" class="text-btn">BUY COURSE</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_0">
                                            <div class="card-image">
                                                <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">General Science</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">

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
                                                    <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                </div><!-- end rating-wrap --><br>
                                                <h3 class="card__title">
                                                    <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="#1">Francis Appiah  - Fokuoh</a>
                                                </p><br><br><br>
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <span class="card__price">GH20.00</span>
                                                    <a href="#" class="text-btn">BUY COURSE</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_0">
                                            <div class="card-image">
                                                <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">General Science</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">

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
                                                    <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                </div><!-- end rating-wrap --><br>
                                                <h3 class="card__title">
                                                    <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="#1">Francis Appiah  - Fokuoh</a>
                                                </p><br><br><br>
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <span class="card__price">GH20.00</span>
                                                    <a href="#" class="text-btn">BUY COURSE</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_0">
                                            <div class="card-image">
                                                <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">General Science</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">

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
                                                    <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                </div><!-- end rating-wrap --><br>
                                                <h3 class="card__title">
                                                    <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="#1">Francis Appiah  - Fokuoh</a>
                                                </p><br><br><br>
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <span class="card__price">GH20.00</span>
                                                    <a href="#" class="text-btn">BUY COURSE</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_0">
                                            <div class="card-image">
                                                <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">General Science</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">

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
                                                    <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>


                                                </div><!-- end rating-wrap --><br>
                                                <h3 class="card__title">
                                                    <a href="#">SHS 2 - Elective Mathematics For General Science</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="#1">Francis Appiah  - Fokuoh</a>
                                                </p><br><br><br>
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <span class="card__price">GH20.00</span>
                                                    <a href="#" class="text-btn">BUY COURSE</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->


                                    </div><!-- end course-block -->
                                </div><!-- end tab-pane -->
                            </div><!-- end tab-content -->
                        </div><!-- end col-lg-8 -->

                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-navigation-wrap text-center mt-5">
                                <div class="page-navigation-inner d-inline-block">
                                    <div class="page-navigation mx-auto">
                                        <a href="#" class="page-go page-prev">
                                            <i class="la la-arrow-left"></i>
                                        </a>
                                        <ul class="page-navigation-nav">
                                            <li><a href="#" class="page-go-link">1</a></li>
                                            <li class="active"><a href="#" class="page-go-link">2</a></li>
                                            <li><a href="#" class="page-go-link">3</a></li>
                                            <li><a href="#" class="page-go-link">4</a></li>
                                            <li><a href="#" class="page-go-link">5</a></li>
                                        </ul>
                                        <a href="#" class="page-go page-next">
                                            <i class="la la-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end page-navigation-wrap -->
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                </div><!-- end card-content-wrapper -->
            </div><!-- end container -->
        </div><!-- end course-wrapper -->
    </section><!-- end courses-area -->
    <!--======================================
            END COURSE AREA
    ======================================-->

@endsection
