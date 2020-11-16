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
                            <li><a href="course-details.html"><i class="la la-arrow-left mr-2"></i>Back to Lesson</a></li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <a href="course-details.html">
                                        <img src="images/angular.png" alt="">
                                    </a>
                                    <p>
                                        <a href="#">Sets and Set Operations</a><span class="d-block font-size-13">Mark Kweku</span>
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
                    <div class="col-lg-12">
                        <div class="quiz-content text-center">
                            <p class="lead font-weight-regular font-size-18 text-color-rgba mb-0 pb-2">Submitted on 10 Oct 2020</p>
                            <h2 class="section__title text-white padding-bottom-30px">Your Score is: 17</h2>
                            <div class="btn-box">
                                <a href="student-quiz.html" class="theme-btn theme-btn-light mr-2">Restart Quiz</a>
                                <a href="student-quiz-results.html" class="theme-btn theme-btn-light">View Attended Quiz</a>
                            </div>
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end quiz-content-wrap -->
        <div class="quiz-action-nav bg-white py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="quiz-action-content d-flex align-items-center justify-content-between">
                            <ul class="quiz-nav d-flex align-items-center">
                                <li><i class="la la-check-circle font-size-20 mr-2"></i>17/20 Score</li>
                                <li><i class="la la-clock-o font-size-20 mr-2"></i>20 minutes</li>
                                <li><i class="la la-bar-chart font-size-20 mr-2"></i>Beginner</li>
                            </ul>
                            <div class="quiz-nav-btns">
                                <a href="student-quiz-result-details.html" class="theme-btn theme-btn-light bg-color-1 text-white">Next Question <i class="la la-angle-right ml-1"></i></a>
                            </div>
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end quiz-action-nav -->
        <div class="quiz-ans-wrap padding-top-80px padding-bottom-80px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="quiz-ans-content">
                            <div class="d-flex align-items-center">
                                <span class="quiz-count icon-element icon--element bg-color-1 text-white mr-2">2</span>
                                <h3 class="widget-title font-weight-semi-bold">Question 2 of 20</h3>
                            </div>
                            <p class="pt-3">What is the name of what connect two set let say setA and setB together and how is it mostly declared or referred
                                when it is being used in a venn diagram for diagrammatic representation in set and it calculative works?</p>
                            <ul class="quiz-result-list pt-4 pl-3">
                                <li class="primary-color mb-2">
                                    <span class="icon-element icon--element mr-2">A</span>
                                    It is mostly called intersection and is represented by a variable say X
                                </li>
                                <li class="primary-color mb-2">
                                <span class="icon-element icon--element icon-success mr-2">
                                    <i class="la la-check"></i>
                                </span>
                                    It is mostly called union and is represented by a variable say X
                                </li>
                                <li class="primary-color mb-2">
                                    <span class="icon-element icon--element icon-error mr-2">C</span>
                                    It is mostly called iteration and is represented by a variable say X
                                </li>
                            </ul>
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end quiz-ans-wrap -->
    </section><!-- end quiz-wrap -->
    <!-- ================================
        END QUIZ AREA
    ================================= -->



@endsection
