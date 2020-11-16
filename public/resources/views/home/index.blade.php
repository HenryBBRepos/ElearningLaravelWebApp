@extends('layout.app_index')

@section('content')


    <!--================================
         START SLIDER AREA
=================================-->
    <section class="slider-area">
        <div class="single-slide-item single-slide-item-2 slide-bg4">
            <div id=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="section__title">Browse Our SHS & Skills Training<br> Courses</h2>
                            <p class="section__desc">
                                Learn from over 2,000 online video of SHS and skills Training subject and courses with new additions <br>
                                published by our teachers every month
                            </p>
                        </div>
                        <div class="hero-search-form">
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <div class="form-group mb-0">
                                                    <input class="form-control" type="text" name="search" placeholder="What subject or course do you want to learn?">
                                                    <span class="la la-search search-icon"></span>
                                                </div>
                                            </div><!-- end input-box -->
                                        </div>
                                    </div>
                                </form>
                            </div><!-- end contact-form-action -->
                        </div>
                    </div><!-- col-lg-12 -->
                </div><!-- row -->
            </div><!-- container -->
            <br><br> <br><br> <br><br><!-- our-post-content -->
        </div><!-- end single-slide-item -->
    </section><!-- end slider-area -->
    <!--================================
            END SLIDER AREA
    =================================-->

    <!--======================================
            START COURSE AREA
    ======================================-->
    <br><br><br>
    <section class="course-area">
        <div class="card-content-wrapper padding-top-40px padding-bottom-115px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="section-heading">
                                    <h2 class="section__title">Featured Courses</h2>
                                </div><!-- end section-heading -->
                            </div><!-- end col-lg-9 -->

                        </div><br>
                        <div class="row">
                            @forelse($courses as $course)
                                <div class="col-lg-4 column-td-half">
                                <div class="card-item card-preview" data-tooltip-content="#tooltip_content_0">
                                    <div class="card-image">
                                        <a href="{{route('lesson_detail',[ $course->id])}}" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>
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
                                            </span>
                                            <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                <span class="la la-heart-o"></span>
                                            </a>

                                        </div><!-- end rating-wrap -->
                                        <h3 class="card__title">
                                            <a href="#">{{$course->course_name}}</a>
                                        </h3>
                                        <p class="card__author">
                                            <a href="#1">{{$course->teacher_name}}</a>
                                        </p>
                                        <br>
                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                            <span class="card__price">{{$course->course_price}}</span>
                                            <a href="#" class="text-btn">BUY COURSE</a>
                                        </div><!-- end card-price-wrap -->
                                    </div><!-- end card-content -->
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-4 -->
                            @empty
                            
                            @endforelse
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="btn-box mt-4 text-center">
                            <a href="#" class="theme-btn">browse all topic</a>
                        </div><!-- end btn-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end card-content-wrapper -->
    </section><!-- end courses-area -->

    <!-- end tooltip_templates -->
    <!--======================================
            END COURSE AREA
    ======================================-->

    <div class="section-block"></div>

    <!--======================================
            START CATEGORY AREA
    ======================================-->
{{--    <section class="category-area padding-top-120px category-area2 text-left">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2 class="section__title">Explore our Subject Groupings </h2>--}}
{{--                    </div><!-- end section-heading -->--}}
{{--                </div><!-- end col-lg-6 -->--}}
{{--            </div><!-- end row -->--}}
{{--            <div class="row margin-top-28px">--}}
{{--                <div class="col-lg-3 column-td-half">--}}
{{--                    <div class="category-item category-item-layout-2">--}}
{{--                        <a href="#" class="category-content">--}}
{{--                            <!--                        <i class="la la-desktop icon-element"></i>-->--}}
{{--                            <h3 class="cat__title">Science</h3>--}}
{{--                        </a><!-- end category-content -->--}}
{{--                    </div><!-- end category-item -->--}}
{{--                </div><!-- end col-lg-3 -->--}}
{{--                <div class="col-lg-3 column-td-half">--}}
{{--                    <div class="category-item category-item-layout-2">--}}
{{--                        <a href="#" class="category-content">--}}
{{--                            <h3 class="cat__title">Mathematics</h3>--}}
{{--                        </a><!-- end category-content -->--}}
{{--                    </div><!-- end category-item -->--}}
{{--                </div><!-- end col-lg-3 -->--}}
{{--                <div class="col-lg-3 column-td-half">--}}
{{--                    <div class="category-item category-item-layout-2">--}}
{{--                        <a href="#" class="category-content">--}}
{{--                            <h3 class="cat__title">Social</h3>--}}
{{--                        </a><!-- end category-content -->--}}
{{--                    </div><!-- end category-item -->--}}
{{--                </div><!-- end col-lg-3 -->--}}
{{--                <div class="col-lg-3 column-td-half">--}}
{{--                    <div class="category-item category-item-layout-2">--}}
{{--                        <a href="#" class="category-content">--}}
{{--                            <h3 class="cat__title">Computer</h3>--}}
{{--                        </a><!-- end category-content -->--}}
{{--                    </div><!-- end category-item -->--}}
{{--                </div><!-- end col-lg-3 -->--}}
{{--                <div class="col-lg-3 column-td-half">--}}
{{--                    <div class="category-item category-item-layout-2">--}}
{{--                        <a href="#" class="category-content">--}}
{{--                            <h3 class="cat__title">Building & Construction</h3>--}}
{{--                        </a><!-- end category-content -->--}}
{{--                    </div><!-- end category-item -->--}}
{{--                </div><!-- end col-lg-3 -->--}}
{{--                <div class="col-lg-3 column-td-half">--}}
{{--                    <div class="category-item category-item-layout-2">--}}
{{--                        <a href="#" class="category-content">--}}
{{--                            <h3 class="cat__title">English</h3>--}}
{{--                        </a><!-- end category-content -->--}}
{{--                    </div><!-- end category-item -->--}}
{{--                </div><!-- end col-lg-3 -->--}}
{{--                <div class="col-lg-3 column-td-half">--}}
{{--                    <div class="category-item category-item-layout-2">--}}
{{--                        <a href="#" class="category-content">--}}
{{--                            <h3 class="cat__title">Religious Studies</h3>--}}
{{--                        </a><!-- end category-content -->--}}
{{--                    </div><!-- end category-item -->--}}
{{--                </div><!-- end col-lg-3 -->--}}
{{--                <div class="col-lg-3 column-td-half">--}}
{{--                    <div class="category-item category-item-layout-2">--}}
{{--                        <a href="#" class="category-content">--}}
{{--                            <h3 class="cat__title">Food & Catering</h3>--}}
{{--                        </a><!-- end category-content -->--}}
{{--                    </div><!-- end category-item -->--}}
{{--                </div><!-- end col-lg-3 -->--}}
{{--            </div><!-- end row -->--}}
{{--        </div><!-- end container -->--}}
{{--    </section><!-- end category-area -->--}}
    <!--======================================
            END CATEGORY AREA
    ======================================-->

    <section class="course-area padding-top-120px">
        <div class="course-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-left">
                            <!--                        <h5 class="section__meta">Learn on your schedule</h5>-->
                            <h2 class="section__title">Trending Courses</h2>
                            <!--                        <span class="section-divider"></span>-->
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row margin-top-28px">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div class="course-carousel owl-dot-and-nav">
                                @foreach($courses as $course)
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_0">
                                    <div class="card-image">
                                        <a href="#" class="card__img"><img src="asset_home/images/img12.png" alt=""></a>

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
                                            <a href="#">{{$course->course_name}}</a>
                                        </h3>
                                        <p class="card__author">
                                            <a href="#1">{{$course->teacher_name}}</a>
                                        </p>

                                       <br>
                                        <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                            <span class="card__price">{{$course->course_price}}</span>
                                            <a href="#" class="text-btn">BUY COURSE</a>
                                        </div><!-- end card-price-wrap -->
                                    </div><!-- end card-content -->
                                </div><!-- end card-item -->
                                @endforeach
                            </div><!-- end course-carousel -->
                        </div><!-- end tab-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end course-wrapper -->
    </section>




    <!--======================================
            START BENEFIT AREA
    ======================================-->
    <section class="benefit-area benefit-area2 padding-top-120px padding-bottom-120px overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-box img-box-2">
                        <img src="asset_home/images/img_short_c.png" alt="">
                        <img src="asset_home/images/img_short_a.png" alt="">
                        <img src="asset_home/images/img_short_d.png" alt="">
                        <img src="asset_home/images/img_short_b.png" alt="">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="benefit-heading padding-top-120px">
                        <div class="section-heading">
                            <!--                        <h5 class="section__meta">get start with wolo</h5>-->
                            <h2 class="section__title">We provide you with the best and quality education for that good grade</h2>
                            <!--                        <span class="section-divider"></span>-->
                            <p class="section__desc">
                                Wolo is for all student both at the Senior High Level of education. Get access to all our simplified video teaching on all subject and topics.
                            </p>
                        </div><!-- end section-heading -->
                        <div class="row">
                            <div class="col-lg-4 column-td-half">
                                <div class="info-icon-box">
                                    <span class="la la-mouse-pointer icon-element icon-bg-1"></span>
                                    <h4 class="widget-title">1,000 subject & Courses</h4>
                                </div><!-- end info-icon-box -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-td-half">
                                <div class="info-icon-box">
                                    <span class="la la-bolt icon-element icon-bg-2"></span>
                                    <h4 class="widget-title">Video Learning</h4>
                                </div><!-- end info-icon-box -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-td-half">
                                <div class="info-icon-box">
                                    <span class="la la-users icon-element icon-bg-3"></span>
                                    <h4 class="widget-title">Expert Teachers</h4>
                                </div><!-- end info-icon-box -->
                            </div><!-- end col-lg-4 -->
                        </div><!-- end row -->
                        <div class="btn-box">
                            <a href="about.html" class="theme-btn">join for free</a>
                        </div>
                    </div><!-- end benefit-heading -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end benefit-area -->
    <!--======================================
            END BENEFIT AREA
    ======================================-->

    <!--================================
             START TESTIMONIAL AREA
    =================================-->
    <section class="testimonial-area section-bg padding-top-120px padding-bottom-110px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <!--                    <h5 class="section__meta">testimonials</h5>-->
                        <h2 class="section__title">From the wolo learning community</h2>
                        <!--                    <span class="section-divider"></span>-->
                        <p class="section__desc">
                            We are community of online learners who believe accessibility of learning materials anywhere
                        </p>
                    </div><!-- end section-heading -->
                    <div class="btn-box">
                        <a href="about.html" class="theme-btn">explore all</a>
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="testimonial-subtitle pb-3">
                        <h3 class="widget-title font-weight-medium">10,000+ student are already learning on Wolo</h3>
                    </div>
                    <div class="testimonial-carousel-2">
                        <div class="testimonial-item testimonial-item-layout-2">
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    “ Wolo is designed with flexible & scalable e-learning system
                                    in mind. This platform comes up with many
                                    course options. This is incredible. ”
                                </p>
                            </div><!-- end testimonial__desc -->
                            <div class="testimonial-header">
                                <img src="asset_home/images/testi-img.jpg" alt="small-avatar">
                                <div class="testimonial__name">
                                    <h3 class="testimonial__name-title">Jackie</h3>
                                    <span class="testimonial__name-meta">Presenter</span>
                                    <ul class="review-stars d-inline-block">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star-o"></span></li>
                                    </ul>
                                </div>
                            </div><!-- end testimonial-header -->
                        </div><!-- end testimonial-item -->
                        <div class="testimonial-item testimonial-item-layout-2">
                            <div class="testimonial__desc">
                                <p class="testimonial__desc-desc">
                                    The future is here. The problem of access to quality and affordable education is mere
                                    excuse. That debate belongs to the past. With Wolo, there is absolutely no
                                    reason why the rural kid cannot enjoy the same
                                    opportunities offered by our top schools.

                                </p>
                            </div><!-- end testimonial__desc -->
                            <div class="testimonial-header">
                                <img src="asset_home/images/testi-img2.jpg" alt="small-avatar">
                                <div class="testimonial__name">
                                    <h3 class="testimonial__name-title">Joe</h3>
                                    <span class="testimonial__name-meta">Entreprenuer</span>
                                    <ul class="review-stars d-inline-block">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star-o"></span></li>
                                    </ul>
                                </div>
                            </div><!-- end testimonial-header -->
                        </div><!-- end testimonial-item -->

                    </div><!-- end testimonial-carousel-2 -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end testimonial-area -->
    <!--================================
            END TESTIMONIAL AREA
    =================================-->

    <!--======================================
            START GET-START AREA
    ======================================-->
    <section class="get-start-area get-start-area2 padding-top-120px padding-bottom-110px overflow-hidden">
        <div class="box-icons">
            <!--        <div class="box-one"></div>-->
            <!--        <div class="box-two"></div>-->
            <!--        <div class="box-three"></div>-->
            <!--        <div class="box-four"></div>-->
        </div><!-- end box-icons -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="get-start-content">
                        <div class="section-heading">
                            <h5 class="section__meta section__metalight">start online learning</h5>
                            <h2 class="section__title text-white">Prepare well for exam with Wolo  <br>Learn anytime, anywhere</h2>
                            <!--                        <span class="section-divider section-divider-light"></span>--><br><br>
                        </div><!-- end section-heading -->
                        <div class="btn-box margin-top-20px">
                            <a href="#" class="theme-btn theme-btn-hover-light">get started</a>
                        </div>
                    </div><!-- end get-start-content -->
                </div><!-- end col-lg-10 -->
                <div class="col-lg-2">
                    <div class="promo-video-btn d-flex h-100 align-items-center justify-content-end">
                        <a class="mfp-iframe video-play-btn watch-video-btn" href="#" title="Watch Video">
                            <i class="la la-play"></i>
                        </a>
                    </div><!-- end promo-video-btn -->
                </div><!-- end col-lg-2 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="box-icons2">
            <!--        <div class="box-one"></div>-->
            <!--        <div class="box-two"></div>-->
            <!--        <div class="box-three"></div>-->
            <!--        <div class="box-four"></div>-->
            <!--        <div class="box-five"></div>-->
        </div><!-- end box-icons2 -->
    </section><!-- end get-start-area -->
    <!--======================================
            END GET-START AREA
    ======================================-->

    <!--======================================
            START CTA AREA
    ======================================-->
    <section class="cta-area section-bg padding-top-120px padding-bottom-90px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 column-lmd-half">
                    <div class="post-card post-card-layout-3">
                        <div class="post-card-content">
                            <!--                        <div class="post-card-img">-->
                            <!--                            <img src="images/img33.jpg" alt="" class="img-fluid">-->
                            <!--                        </div>-->
                            <div class="post-card-inner-content">
                                <h2 class="widget-title mb-2">Become a teacher</h2>
                                <p class="mb-4">Join our team of teachers and earn cash as you contrubite to the platform resources</p>
                                <a href="#" class="theme-btn line-height-40 text-capitalize">Start teaching</a>
                            </div>
                        </div><!-- end post-card-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-half">
                    <div class="post-card post-card-layout-3">
                        <div class="post-card-content">
                            <!--                        <div class="post-card-img">-->
                            <!--                            <img src="images/img34.jpg" alt="" class="img-fluid">-->
                            <!--                        </div>-->
                            <div class="post-card-inner-content">
                                <h2 class="widget-title mb-2">Become a Partner</h2>
                                <p class="mb-4">Join Wolo as an institution and get custom education product that serve your institution</p>
                                <a href="#" class="theme-btn line-height-40 text-capitalize">Get Wolo for business</a>
                            </div>
                        </div><!-- end post-card-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-half">
                    <div class="post-card post-card-layout-3">
                        <div class="post-card-content">
                            <!--                        <div class="post-card-img">-->
                            <!--                            <img src="images/img35.jpg" alt="" class="img-fluid">-->
                            <!--                        </div>-->
                            <div class="post-card-inner-content">
                                <h2 class="widget-title mb-2">Become a Learner</h2>
                                <p class="mb-4">Learn SHS subject topics online with wolo e-learning platform anytime and anywhere</p>
                                <a href="#" class="theme-btn line-height-40 text-capitalize">Start learning</a>
                            </div>
                        </div><!-- end post-card-content -->
                    </div>
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </section>
    <!-- ================================
           START CTA AREA
    ================================= -->


    <div class="section-block"></div>




    <!-- ================================
           START BLOG AREA
    ================================= -->
{{--    <section class="blog-area blog-area2 section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-heading text-left">--}}
{{--                        <h2 class="section__title">Latest News & Articles</h2>--}}
{{--                        <!--                    <span class="section-divider"></span>-->--}}
{{--                    </div><!-- end section-heading -->--}}
{{--                </div><!-- end col-md-12 -->--}}
{{--            </div><!-- end row -->--}}
{{--            <div class="row margin-top-30px">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="blog-post-carousel owl-dot-and-nav">--}}
{{--                        <div class="card-item blog-card">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="#" class="card__img"><img src="asset_home/images/news_one.png" alt=""></a>--}}
{{--                                <div class="card-badge">--}}
{{--                                    <span class="badge-label">10 Oct</span>--}}
{{--                                </div>--}}
{{--                            </div><!-- end card-image -->--}}
{{--                            <div class="card-content">--}}
{{--                                <h3 class="card__title mt-0">--}}
{{--                                    <a href="#">School to Focus on Building Strong Institutions</a>--}}
{{--                                </h3>--}}
{{--                                <div class="card-action">--}}
{{--                                    <ul class="card-duration d-flex align-items-center">--}}
{{--                                        <li>By<a href="#" class="blog-admin-name">Wolo Afric</a></li>--}}
{{--                                        <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                        <!--                                    <li><span class="blog__panel-likes"></span></li>-->--}}
{{--                                    </ul>--}}
{{--                                </div><!-- end card-action -->--}}
{{--                            </div><!-- end card-content -->--}}
{{--                        </div><!-- end card-item -->--}}
{{--                        <div class="card-item blog-card">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="#" class="card__img"><img src="asset_home/images/news_two.png" alt=""></a>--}}
{{--                                <div class="card-badge">--}}
{{--                                    <span class="badge-label">10 Oct</span>--}}
{{--                                </div>--}}
{{--                            </div><!-- end card-image -->--}}
{{--                            <div class="card-content">--}}
{{--                                <h3 class="card__title mt-0">--}}
{{--                                    <a href="#">MTN Foundation gives 100 PCs to Tardi Technical University</a>--}}
{{--                                </h3>--}}
{{--                                <div class="card-action">--}}
{{--                                    <ul class="card-duration d-flex align-items-center">--}}
{{--                                        <li>By<a href="#" class="blog-admin-name">Wolo Afric</a></li>--}}
{{--                                        <li><span class="blog__panel-comment">9 Comments</span></li>--}}
{{--                                        <!--                                    <li><span class="blog__panel-likes">130 Likes</span></li>-->--}}
{{--                                    </ul>--}}
{{--                                </div><!-- end card-action -->--}}
{{--                            </div><!-- end card-content -->--}}
{{--                        </div><!-- end card-item -->--}}
{{--                        <div class="card-item blog-card">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="#" class="card__img"><img src="asset_home/images/news_one.png" alt=""></a>--}}
{{--                                <div class="card-badge">--}}
{{--                                    <span class="badge-label">10 Oct</span>--}}
{{--                                </div>--}}
{{--                            </div><!-- end card-image -->--}}
{{--                            <div class="card-content">--}}
{{--                                <h3 class="card__title mt-0">--}}
{{--                                    <a href="#">School to Focus on Building Strong Institutions</a>--}}
{{--                                </h3>--}}
{{--                                <div class="card-action">--}}
{{--                                    <ul class="card-duration d-flex align-items-center">--}}
{{--                                        <li>By<a href="#" class="blog-admin-name">Wolo Afric</a></li>--}}
{{--                                        <li><span class="blog__panel-comment">10 Comments</span></li>--}}
{{--                                        <!--                                    <li><span class="blog__panel-likes">130 Likes</span></li>-->--}}
{{--                                    </ul>--}}
{{--                                </div><!-- end card-action -->--}}
{{--                            </div><!-- end card-content -->--}}
{{--                        </div><!-- end card-item -->--}}

{{--                    </div><!-- end blog-post-carousel -->--}}
{{--                </div><!-- end col-lg-12 -->--}}
{{--            </div><!-- end row -->--}}
{{--        </div><!-- end container -->--}}
{{--    </section><!-- end blog-area -->--}}
    <!-- ================================
           START BLOG AREA
    ================================= -->


    <!-- ================================
           START CLIENTLOGO AREA
    ================================= -->
    <section class="clientlogo-area overflow-hidden padding-top-120px padding-bottom-100px text-center">
        <div class="stroke-line">
            <span class="stroke__line"></span>
            <span class="stroke__line"></span>
            <span class="stroke__line"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <!--                    <h5 class="section__meta">our partners</h5>-->
                        <h2 class="section__title">Our Partners</h2>
                        <!--                    <span class="section-divider"></span>-->
                        <p class="section__desc">
                            Wolo provides that quality learning environment and resources that is needed
                            by all <br>SHS student who is learnig toward the WAEC examinations

                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-md-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logo">
                        <div class="client-logo-item">
                            <a href="#"><img src="asset_home/images/sponsor-img_a.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <a href="#"><img src="asset_home/images/sponsor-img_b.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <a href="#"><img src="asset_home/images/sponsor-img_c.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <a href="#"><img src="asset_home/images/sponsor-img_d.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <a href="#"><img src="asset_home/images/sponsor-img_e.png" alt="brand image"></a>
                        </div><!-- end client-logo-item -->
                    </div><!-- end client-logo -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <br><br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-3 d-flex align-items-center justify-content-center text-left">
                        <div class="btn-box-inner mr-3">
                            <span class="d-block mb-2">Are you teacher?</span>
                            <a href="#" class="theme-btn line-height-40 text-capitalize">Start teaching</a>
                        </div>
                        <div class="btn-box-inner">
                            <span class="d-block mb-2">Are you student?</span>
                            <a href="#" class="theme-btn line-height-40 text-capitalize">Start learning</a>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="stroke-line2">
            <span class="stroke__line"></span>
            <span class="stroke__line"></span>
            <span class="stroke__line"></span>
        </div>
    </section><!-- end clientlogo-area -->
    <!-- ================================
           START CLIENTLOGO AREA
    ================================= -->



    <!--======================================
            START SUBSCRIBER AREA
    ======================================-->
    <section class="subscriber-area padding-top-80px padding-bottom-75px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <!--                    <h5 class="section__meta section__metalight">Subscribe</h5>-->
                        <h2 class="section__title text-white">Subscribe our teaching resources & materials</h2>
                        <!--                    <span class="section-divider section-divider-light"></span>-->
                        <p class="section__desc text-color-rgba">
                            When you subscribe you get access to all our subject topic treated from our expert
                            <br>teachers. You also get the chance to practice our free questions.
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-6 mx-auto text-left">
                    <div class="subscriber-form">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <!--                                <label class="form-label text-white">Your email address</label>-->
                                    <div class="form-group d-flex align-items-center">
                                        <input class="form-control" type="email" name="email" placeholder="Enter Email Address" required>
                                        <span class="la la-envelope-o input-icon"></span>
                                        <button class="theme-btn theme-btn-hover-light" type="submit">Subscribe</button>
                                    </div>
                                    <p class="text-color-rgba font-size-14 mt-1">
                                        <i class="la la-lock mr-1"></i>Your information is safe with us! unsubscribe anytime.
                                    </p>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end subscriber-form-->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end subscriber-area -->
    <!--======================================
            END SUBSCRIBER AREA
    ======================================-->


@endsection
