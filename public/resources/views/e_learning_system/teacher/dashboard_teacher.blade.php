@extends('layout.app_teacher')

@section('content')
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
                        <div class="user-bread-content d-flex align-items-center">
                            <div class="bread-img-wrap">
                                <img src="asset_home/images/team10.jpg" alt="">
                            </div>
                            <div class="section-heading">
                                <h2 class="section__title font-size-30">Hello!, Mark Kweku</h2>
                                <div class="rating-wrap d-flex mt-2">
                                    <ul class="review-stars">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star-o"></span></li>
                                    </ul>
                                    <span class="star-rating-wrap">
                                        <span class="star__rating">4.2</span>
                                        <span class="star__count">(70)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
{{--                        <div class="upload-btn-box">--}}
{{--                            <form action="#" method="post" enctype="multipart/form-data">--}}
{{--                                <input type="file" name="files[]" placeholder="ererrerer" class="filer_input" multiple="multiple">--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-block"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">Dashboard</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-1 flex-shrink-0">
                            <i class="la la-mouse-pointer"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Enrolled Lessons</h4>
                            <span class="info__count">11</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-2 flex-shrink-0">
                            <i class="la la-file-text-o"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Added Questions</h4>
                            <span class="info__count">5</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-3 flex-shrink-0">
                            <i class="la la-graduation-cap"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Learning Path</h4>
                            <span class="info__count">6</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-4 flex-shrink-0">
                            <i class="la la-users"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Total Subscription</h4>
                            <span class="info__count">300</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-5 flex-shrink-0">
                            <i class="la la-file-video-o"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Total Reviews</h4>
                            <span class="info__count">11</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-6 flex-shrink-0">
                            <i class="la la-dollar"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Total Earnings</h4>
                            <span class="info__count">289.12</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-lg-7 column-lmd-2-half column-md-full">
                    <div class="chart-item">
                        <div class="chart-headline margin-bottom-30px d-flex justify-content-between align-items-center">
                            <h3 class="widget-title font-size-18">Earning Statistics</h3>
                            <div class="sort-ordering chart-short-option">
                                <select class="sort-ordering-select">
                                    <option value="this-week">This Week</option>
                                    <option value="this-month">This Month</option>
                                    <option value="last-months">Last 6 Months</option>
                                    <option value="this-year">This Year</option>
                                </select>
                            </div>
                        </div>
                        <canvas id="line-chart"></canvas>
                        <div class="chart-legend text-center margin-top-40px">
                            <ul>
                                <li>Earnings for this month</li>
                            </ul>
                        </div>
                    </div><!-- end chart-item -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5 column-lmd-2-half column-md-full">
                    <div class="dashboard-shared">
                        <div class="mess-dropdown">
                            <div class="dashboard-title margin-bottom-20px">
                                <h4 class="widget-title font-size-18 d-flex align-items-center">
                                    Notifications
                                    <a href="#" class="primary-color-3 ml-auto font-size-13">Mark all as read</a>
                                </h4>
                            </div><!-- end dashboard-title -->
                            <div class="mess__body">
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-1 text-white">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">1 hour ago</span>
                                            <p class="text">You have a new subscription</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-1 text-white">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">1 hour ago</span>
                                            <p class="text">You have a new subscription</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-1 text-white">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">1 hour ago</span>
                                            <p class="text">You have a new subscription</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-1 text-white">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">1 hour ago</span>
                                            <p class="text">You have a new subscription</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-1 text-white">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">1 hour ago</span>
                                            <p class="text">You have a new subscription</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-1 text-white">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">1 hour ago</span>
                                            <p class="text">You have a new subscription</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-1 text-white">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">1 hour ago</span>
                                            <p class="text">You have a new subscription</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>

                            </div>
                            <div class="btn-box p-2 text-center">
                                <a href="#">View All Notifications</a>
                            </div><!-- end btn-box -->
                        </div><!-- end mess-dropdown -->
                    </div><!-- end dashboard-shared -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-content mt-0 pt-0 pb-4 border-top-0 text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="copy__desc">&copy; 2020 Wolo. All Rights Reserved. by <a href="https://www.woloafric.com">Wolo Afric.</a></p>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </div><!-- end copyright-content -->
                </div><!-- end col-lg-12 -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
@endsection
