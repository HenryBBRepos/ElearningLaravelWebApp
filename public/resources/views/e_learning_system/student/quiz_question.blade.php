@extends('layout.app_lesson_detail')
@section('content')


    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-nav bg-white border-top py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="quiz-nav d-flex align-items-center">
                        <li><a href="course-details.html"><i class="la la-arrow-left mr-2"></i>Back to Lesson</a></li>
                        <li>
                            <div class="d-flex align-items-center">
                                <a href="{{route('lesson')}}">
                                    <img src="images/angular.png" alt="">
                                </a>
                                <p>
                                    <a href="{{route('lesson')}}">Set and Set Operations</a><span class="d-block font-size-13">Mark Kweku</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-nav -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START QUIZ AREA
    ================================= -->
    <section class="quiz-wrap">
        <div class="quiz-content-wrap bg-black padding-top-60px padding-bottom-60px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="quiz-course-nav d-flex align-items-center justify-content-between">
                            <li>
                                <a href="course-details.html" class="icon-element d-block" data-toggle="tooltip" data-placement="bottom" title="Set and Set operations: Introduction to Set">
                                    <i class="la la-check-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="course-details.html" class="icon-element d-block" data-toggle="tooltip" data-placement="bottom" title="Set and Set operations: Two Set Problem">
                                    <i class="la la-check-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="course-details.html" class="icon-element d-block" data-toggle="tooltip" data-placement="bottom" title="Set and Set operations: Two Set Problem">
                                    <i class="la la-check-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="student-quiz.html" class="icon-element primary-color-2 d-block" data-toggle="tooltip" data-placement="bottom" title="Quiz: Set and Set operations">
                                    <i class="la la-user"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="quiz-content padding-top-40px">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="section__title text-white">Question 1 of 20</h2>
                                <p class="lead text-white font-size-25 font-weight-medium mb-0">00:16</p>
                            </div>
                            <p class="section__desc quiz-desc text-color-rgba mb-0 pt-3">What is the name of what connect two set let say setA and setB together and how is it mostly declared or referred when it is being used in a venn diagram for diagrammatic representation in set and it calculative works?</p>
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
                                <li><i class="la la-sliders font-size-20 mr-2"></i>Choose the correct answer below</li>
                            </ul>
                            <div class="quiz-nav-btns">
                                <a href="{{route('dashboard')}}" class="theme-btn theme-btn-light mr-2">Skip Quiz</a>
                                <a href="{{route('lesson')}}" class="theme-btn theme-btn-light mr-2">Review Video</a>
                                <a href="{{route('quiz_result')}}" class="theme-btn theme-btn-light bg-color-1 text-white">Next Question <i class="la la-angle-right ml-1"></i></a>
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
                            <h3 class="widget-title">Your Answer:</h3>
                            <ul class="py-3">
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">It is mostly called intersection and is represented by a variable say X</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="chb2" checked="checked">
                                        <label for="chb2">It is mostly called union and is represented by a variable say X</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="chb3">
                                        <label for="chb3">It is mostly called iteration and is represented by a variable say X</label>
                                    </div>
                                </li>
                            </ul>
                            <p class="font-size-15"><strong class="primary-color">Note:</strong> There can be multiple correct answers to this question.</p>
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
