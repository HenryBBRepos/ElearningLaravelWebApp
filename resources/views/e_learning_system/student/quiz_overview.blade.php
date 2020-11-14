@extends('layout.app_lesson_detail')
@section('content')



    <!-- ================================
    START QUIZ AREA
================================= -->
    <section class="quiz-wrap">
        <div class="breadcrumb-nav bg-white border-top py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="quiz-nav d-flex align-items-center">
                            <li><a href="course-details.html"><i class="la la-arrow-left mr-2"></i>Back to Lessson</a></li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <a href="{{route('quiz_question')}}">
                                        <img src="images/angular.png" alt="">
                                    </a>
                                    <p>
                                        <a href="#">Set and Set Operations</a><span class="d-block font-size-13">Mark Kewku</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-nav -->
        <div class="quiz-content-wrap bg-black padding-top-60px padding-bottom-60px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 column-td-half">
                        <div class="quiz-content quiz-result-content text-center">
                            <p class="section__desc text-color-rgba mb-0 pb-2">Quiz Level</p>
                            <h2 class="section__title text-white">Beginner</h2>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 column-td-half">
                        <div class="quiz-content quiz-result-content text-center">
                            <p class="section__desc text-color-rgba mb-0 pb-2">Questions</p>
                            <h2 class="section__title text-white">20</h2>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 column-td-half">
                        <div class="quiz-content quiz-result-content text-center">
                            <p class="section__desc text-color-rgba mb-0 pb-2">Time Allowed</p>
                            <h2 class="section__title text-white">20:00m</h2>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 column-td-half">
                        <div class="quiz-content quiz-result-content text-center">
                            <div class="btn-box">
                                <a href="#" class="theme-btn theme-btn-light">
                                    <span class="la la-tachometer d-block font-size-40 line-height-30 pt-2"></span>
                                    Show Timer
                                </a>
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end quiz-content-wrap -->
        <div class="quiz-ans-wrap padding-top-80px padding-bottom-80px text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading padding-bottom-50px">
                            <h2 class="section__title">How do you compare?</h2>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col column-td-half column-md-full">
                        <div class="quiz-content quiz-result-content">
                            <h2 class="section__title">2</h2>
                            <p class="section__desc primary-color font-weight-semi-bold mb-0 pt-2">Attempts</p>
                        </div>
                    </div><!-- end col -->
                    <div class="col column-td-half column-md-full">
                        <div class="quiz-content quiz-result-content">
                            <h2 class="section__title primary-color-2">67%</h2>
                            <p class="section__desc primary-color-2 font-weight-semi-bold mb-0 pt-2">Your best result</p>
                        </div>
                    </div><!-- end col -->
                    <div class="col column-td-half column-md-full">
                        <div class="quiz-content quiz-result-content">
                            <h2 class="section__title text-color-2">34%</h2>
                            <p class="section__desc text-color-2 font-weight-semi-bold mb-0 pt-2">Your average result</p>
                        </div>
                    </div><!-- end col -->
                    <div class="col column-td-half column-md-full">
                        <div class="quiz-conten quiz-result-contentt">
                            <h2 class="section__title text-color">0%</h2>
                            <p class="section__desc text-color font-weight-semi-bold mb-0 pt-2">Your worst result</p>
                        </div>
                    </div><!-- end col -->

                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="btn-box pt-5">
                            <a href="{{route('quiz_question')}}" class="theme-btn">Click to start Quiz</a>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end quiz-ans-wrap -->
    </section><!-- end quiz-wrap -->
    <!-- ================================
        END QUIZ AREA
    ================================= -->



@endsection
