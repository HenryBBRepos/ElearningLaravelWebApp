@extends('layout.app_lesson')

@section('content')
    <!--======================================
        START COURSE-DASHBOARD
======================================-->
    <section class="course-dashboard">
        <div class="course-dashboard-wrap">
            <div class="course-dashboard-container d-flex">
                <div class="course-dashboard-column">
                    <div class="lecture-viewer-container">
                        <div class="lecture-video-item">
                            <video controls crossorigin playsinline id="player">
                                <!-- Video files -->
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576"/>
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720"/>
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080"/>

                                <!-- Caption files -->
                                <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default/>
                                <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"/>

                                <!-- Fallback for browsers that don't support the <video> element -->
                                <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
                            </video>
                        </div>
                        <div class="lecture-viewer-text-wrap">
                            <div class="lecture-viewer-text-content">
                                <div class="lecture-viewer-text-body">
                                    <h2 class="widget-title font-size-35 pb-4">Download your Footage for your Quick Start</h2>
                                    <div class="lecture-viewer-content-detail">
                                        <ul class="list-items pb-4">
                                            <li>Hi</li>
                                            <li>Welcome to Motion Graphics in After Effects. </li>
                                        </ul>
                                        <div class="btn-box">
                                            <h3 class="widget-title font-size-20 pb-3">Resources for this lecture</h3>
                                            <a href="javascript:void(0)" class="theme-btn theme-btn-light"><i class="fa fa-file-zip-o mr-2"></i>Quick-start.zip</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end lecture-viewer-container -->
                    <div class="lecture-video-detail">
                        <div class="lecture-tab-body">
                            <div class="section-tab section-tab-2">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation">
                                        <a href="#overview" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                            Overview
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#quest-and-ans" role="tab" data-toggle="tab" aria-selected="false">
                                            Q&A
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="search-course-form">
                                <div class="contact-form-action">
                                    <form action="post">
                                        <div class="form-group mb-0">
                                            <span class="la la-search input-icon"></span>
                                            <input class="form-control" type="text" name="search" placeholder="Search lesson content">
                                            <span class="la la-times search-close-icon"></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="lecture-video-detail-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade" id="course-content">
                                    <div class="mobile-course-content-wrap">
                                        <div class="mobile-course-menu">
                                            <div class="course-dashboard-side-content">
                                                <div class="accordion course-item-list-accordion" id="mobileCourseMenu">
                                                    <div class="card">
                                                        <div class="card-header" id="mobileCollapseMenuOne">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#mobileCollapseOne" aria-expanded="true" aria-controls="mobileCollapseOne">
                                                                    <span class="widget-title font-size-15 font-weight-semi-bold">Section 1: Dive in and Discover After Effects</span>
                                                                    <div class="course-duration">
                                                                        <span>1/5</span>
                                                                        <span>21min</span>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="mobileCollapseOne" class="collapse show" aria-labelledby="mobileCollapseMenuOne" data-parent="#mobileCourseMenu">
                                                            <div class="card-body">
                                                                <div class="course-content-list">
                                                                    <ul class="course-list">
                                                                        <li class="course-item-link active">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb1">
                                                                                    <label for="chb1"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">1. Let's Have Fun - Seriously!</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb2">
                                                                                    <label for="chb2"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">2. A simple concept to get ahead</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link active-resource">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb3">
                                                                                    <label for="chb3"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">3. Download your Footage for your Quick Start</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                                        <div class="msg-action-dot">
                                                                                            <div class="dropdown">
                                                                                                <a class="theme-btn theme-btn-light" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <i class="fa fa-folder-open mr-1"></i> Resources<i class="fa fa-angle-down ml-1"></i>
                                                                                                </a>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                                                        Quick-Start.zip
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb4">
                                                                                    <label for="chb4"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">4. Jump in and Animate your Character</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb5">
                                                                                    <label for="chb5"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">5. Animate Text and Background</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="mobileCollapseMenuTwo">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mobileCollapseTwo" aria-expanded="false" aria-controls="mobileCollapseTwo">
                                                                    <span class="widget-title font-size-15 font-weight-semi-bold">Section 2: Jump Start Into Motion Graphics</span>
                                                                    <div class="course-duration">
                                                                        <span>1/5</span>
                                                                        <span>21min</span>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="mobileCollapseTwo" class="collapse" aria-labelledby="mobileCollapseMenuTwo" data-parent="#mobileCourseMenu">
                                                            <div class="card-body">
                                                                <div class="course-content-list">
                                                                    <ul class="course-list">
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb6">
                                                                                    <label for="chb6"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">6. What you will cover in this section</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link active-resource">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb7">
                                                                                    <label for="chb7"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">7. Download Your Section Footage to Follow Along</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                        <div class="msg-action-dot">
                                                                                            <div class="dropdown">
                                                                                                <a class="theme-btn theme-btn-light" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <i class="fa fa-folder-open mr-1"></i> Resources<i class="fa fa-angle-down ml-1"></i>
                                                                                                </a>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                                                        Section-Footage.zip
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb8">
                                                                                    <label for="chb8"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">8. Getting Ready with Footage</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb9">
                                                                                    <label for="chb9"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">9. Getting Ready to Animate - Assembling Footage</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link active-resource">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb10">
                                                                                    <label for="chb10"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">10. Animating Your Graphics</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                        <div class="msg-action-dot">
                                                                                            <div class="dropdown">
                                                                                                <a class="theme-btn theme-btn-light" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    <i class="fa fa-folder-open mr-1"></i> Resources<i class="fa fa-angle-down ml-1"></i>
                                                                                                </a>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                                                        Animating.zip
                                                                                                    </a>
                                                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                                                        Graphics.zip
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="mobileCollapseMenuThree">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mobileCollapseThree" aria-expanded="false" aria-controls="mobileCollapseThree">
                                                                    <span class="widget-title font-size-15 font-weight-semi-bold">Section 3: Graphics from within After Effects</span>
                                                                    <div class="course-duration">
                                                                        <span>1/5</span>
                                                                        <span>21min</span>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="mobileCollapseThree" class="collapse" aria-labelledby="mobileCollapseMenuThree" data-parent="#mobileCourseMenu">
                                                            <div class="card-body">
                                                                <div class="course-content-list">
                                                                    <ul class="course-list">
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb11">
                                                                                    <label for="chb11"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">11. Intro to Graphics in After Effects</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb12">
                                                                                    <label for="chb12"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">12. After Effects Interface a Quick Overview</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb13">
                                                                                    <label for="chb13"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">13. How to Create Motion Graphics Animation- A Structured Approach</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb14">
                                                                                    <label for="chb14"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">14. Create Your Graphics with After Effects Tools</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb15">
                                                                                    <label for="chb15"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">15. Animating Your Graphics</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="mobileCollapseMenuFour">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mobileCollapseFour" aria-expanded="false" aria-controls="mobileCollapseFour">
                                                                    <span class="widget-title font-size-15 font-weight-semi-bold">Section 4: The Phone Animation - Your First Complete Motion Graphics Project</span>
                                                                    <div class="course-duration">
                                                                        <span>1/5</span>
                                                                        <span>1hr 2min</span>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="mobileCollapseFour" class="collapse" aria-labelledby="mobileCollapseMenuFour" data-parent="#mobileCourseMenu">
                                                            <div class="card-body">
                                                                <div class="course-content-list">
                                                                    <ul class="course-list">
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb16">
                                                                                    <label for="chb16"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">16. Your Learning Take Away from This Section</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb17">
                                                                                    <label for="chb17"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">17. What is inside a Shape Layer</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb18">
                                                                                    <label for="chb18"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">18. Let's Create this Walking Guy - Simple Compound Shapes</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb19">
                                                                                    <label for="chb19"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">19. Let's Get Walking - Part One - (Download Enabled)</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb20">
                                                                                    <label for="chb20"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">20. He is Walking!! Beginner's Style - (Download Enabled)</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="mobileCollapseMenuFive">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mobileCollapseFive" aria-expanded="false" aria-controls="mobileCollapseFive">
                                                                    <span class="widget-title font-size-15 font-weight-semi-bold">Section 5: The Angry Birds Animation - A Closer Look at Time and Space</span>
                                                                    <div class="course-duration">
                                                                        <span>1/5</span>
                                                                        <span>21min</span>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="mobileCollapseFive" class="collapse" aria-labelledby="mobileCollapseMenuFive" data-parent="#mobileCourseMenu">
                                                            <div class="card-body">
                                                                <div class="course-content-list">
                                                                    <ul class="course-list">
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb21">
                                                                                    <label for="chb21"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">21. Your Learning Take Away from This Section</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb22">
                                                                                    <label for="chb22"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">22. Download the Angry Birds Images to create your project</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb23">
                                                                                    <label for="chb23"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">23. How to Import Your Asset and Footage</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb24">
                                                                                    <label for="chb24"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">24 .Importing from Illustrator - It doesn't matter if you know  Illustrator</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb25">
                                                                                    <label for="chb25"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">25. Designing Your Scene - (Download Enabled)</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="mobileCollapseMenuSix">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mobileCollapseSix" aria-expanded="false" aria-controls="mobileCollapseSix">
                                                                    <span class="widget-title font-size-15 font-weight-semi-bold">Section 6: How to progress in Motion Graphics</span>
                                                                    <div class="course-duration">
                                                                        <span>1/1</span>
                                                                        <span>2min</span>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="mobileCollapseSix" class="collapse" aria-labelledby="mobileCollapseMenuSix" data-parent="#mobileCourseMenu">
                                                            <div class="card-body">
                                                                <div class="course-content-list">
                                                                    <ul class="course-list">
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb26">
                                                                                    <label for="chb26"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">26. The Way Forward</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="mobileCollapseMenuSeven">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mobileCollapseSeven" aria-expanded="false" aria-controls="mobileCollapseSeven">
                                                                    <span class="widget-title font-size-15 font-weight-semi-bold">Section 7: Bonus Lecture</span>
                                                                    <div class="course-duration">
                                                                        <span>1/2</span>
                                                                        <span>4min</span>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="mobileCollapseSeven" class="collapse" aria-labelledby="collapseMenuSeven" data-parent="#mobileCourseMenu">
                                                            <div class="card-body">
                                                                <div class="course-content-list">
                                                                    <ul class="course-list">
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb27">
                                                                                    <label for="chb27"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">27. Bonus Courses - Learn more for less</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="course-item-link">
                                                                            <div class="course-item-content-wrap">
                                                                                <div class="custom-checkbox">
                                                                                    <input type="checkbox" id="chb28">
                                                                                    <label for="chb28"></label>
                                                                                </div>
                                                                                <div class="course-item-content">
                                                                                    <h4 class="widget-title font-size-15 font-weight-medium">28. conclusion</h4>
                                                                                    <div class="courser-item-meta-wrap">
                                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>1min</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade active show" id="overview">
                                    <div class="lecture-overview-wrap">
                                        <div class="lecture-overview-item">
                                            <div class="lecture-heading">
                                                <h3 class="widget-title pb-2">About this lesson</h3>
                                                <p>
                                                    Students are usually introduced to the concept of sets and set theory at a relatively young age. This introduction, however,
                                                    may not happen in a math class or be introduced as a
                                                    separate branch of mathematics. In fact, most people probably first encountered set theory through Venn diagrams of some sort.
                                                </p>
                                            </div>
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">
                                            <div class="lecture-overview-stats-wrap d-flex ">
                                                <div class="lecture-overview-stats-item">
                                                    <h3 class="widget-title font-size-16">By the numbers</h3>
                                                </div>
                                                <div class="lecture-overview-stats-item">
                                                    <ul class="list-items">
                                                        <li><span>Skill level:</span>All Levels</li>
                                                        <li><span>Students:</span>83950</li>
                                                        <li><span>Languages:</span>English</li>
                                                        <li><span>Captions:</span>Yes</li>
                                                    </ul>
                                                </div>
                                                <div class="lecture-overview-stats-item">
                                                    <ul class="list-items">
                                                        <li><span>Lectures:</span>30</li>
                                                        <li><span>Video length:</span>3.5 total hours</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>

                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">
                                            <div class="lecture-overview-stats-wrap d-flex">
                                                <div class="lecture-overview-stats-item">
                                                    <h3 class="widget-title font-size-16">Description</h3>
                                                </div>
                                                <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">
                                                    <div class="lecture-description show-more-content">
                                                        <p>
                                                            From this lesson we have covered the following set concept
                                                        </p>
                                                        <div class="collapse" id="show-more-content">
                                                            <h3 class="widget-title font-size-16 pb-2">What you’ll learn</h3>
                                                            <ul class="list-items">
                                                                <li>Venn diagram.</li>
                                                            </ul>
                                                        </div>
                                                        <div class="btn-box d-inline-block">
                                                            <a class="collapsed link-collapsed" data-toggle="collapse" href="#show-more-content" role="button" aria-expanded="false" aria-controls="show-more-content">
                                                                <span class="link-collapse-read-more">Read more</span>
                                                                <span class="link-collapse-active">Read less</span>
                                                                <div class="ml-1">
                                                                    <i class="la la-plus"></i>
                                                                    <i class="la la-minus"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">
                                            <div class="lecture-overview-stats-wrap d-flex ">
                                                <div class="lecture-overview-stats-item">
                                                    <h3 class="widget-title font-size-16">Instructor</h3>
                                                </div>
                                                <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">
                                                    <div class="lecture-owner-wrap d-flex align-items-center">
                                                        <div class="lecture-owner-avatar">
                                                            <img src="asset_home/images/team7.jpg" alt="">
                                                        </div>
                                                        <div class="lecture-owner-title-wrap">
                                                            <h3 class="widget-title pb-1 font-size-18"><a href="teacher-detail.html" class="primary-color">Alex Kweku</a></h3>
                                                            <p class="font-size-15">Mathematician and author</p>
                                                        </div>
                                                    </div>
                                                    <div class="lecture-owner-profile pt-4">
                                                        <ul class="social-profile">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lecture-owner-decription pt-4">
                                                        <p>A brief description of the teacher who created the lesson is put here for the student to
                                                        have a fair idea of the teacher of the ...</p>

                                                        <p>Alex</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end lecture-overview-item -->
                                    </div><!-- end lecture-overview-wrap -->
                                </div><!-- end tab-pane -->
                                <div role="tabpanel" class="tab-pane fade" id="quest-and-ans">
                                    <div class="lecture-overview-wrap lecture-quest-wrap">
                                        <div class="new-question-wrap">
                                            <button class="theme-btn theme-btn-light back-to-question-btn"><i class="la la-reply mr-1"></i>Back to all questions</button>
                                            <div class="new-question-body padding-top-40px">
                                                <h3 class="widget-title font-size-20">My question relates to</h3>
                                                <form action="">
                                                    <div class="radio-group pt-4">
                                                        <div class="payment-option">
                                                            <div class="payment-option">
                                                                <label for="radio-1" class="radio-trigger">
                                                                    <input type="radio" id="radio-1" name="radio">
                                                                    <span class="checkmark"></span>
                                                                    <span class="widget-title font-size-18">
                                                                    Course content
                                                                    <span class="d-block primary-color-3 font-weight-medium font-size-15">This might include comments, questions, tips, or projects to share</span>
                                                                </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="payment-option">
                                                            <label for="radio-2" class="radio-trigger">
                                                                <input type="radio" id="radio-2" name="radio">
                                                                <span class="checkmark"></span>
                                                                <span class="widget-title font-size-18">
                                                                  Something else
                                                                 <span class="d-block primary-color-3 font-weight-medium font-size-15">This might include questions about certificates, audio and video troubleshooting, or download issues</span>
                                                            </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="btn-box text-center">
                                                        <button class="theme-btn theme-btn-light w-100">Continue</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- end new-question-wrap -->
                                        <div class="replay-question-wrap">
                                            <button class="theme-btn theme-btn-light back-to-question-btn"><i class="la la-reply mr-1"></i>Back to all questions</button>
                                            <div class="replay-question-body padding-top-30px">
                                                <div class="question-list-item">
                                                    <ul class="comments-list">
                                                        <li>
                                                            <div class="comment">
                                                                <div class="comment-avatar">
                                                                    <img class="avatar__img" alt="" src="images/team8.jpg">
                                                                </div>
                                                                <div class="comment-body">
                                                                    <div class="meta-data d-flex align-items-center justify-content-between">
                                                                        <div class="question-meta-content">
                                                                            <h3 class="comment__author">I still did't get H264 after installing Quicktime. Please what do I do</h3>
                                                                            <p class="comment__meta">
                                                                                <span><a href="#">Alex Smith</a></span>
                                                                                <span><a href="#">Lecture 20</a></span>
                                                                                <span>3 hours ago</span>
                                                                            </p>
                                                                            <p class="comment-content">
                                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                            </p>
                                                                        </div>
                                                                        <div class="question-upvote-action">
                                                                            <div class="number-upvotes pb-2 d-flex align-items-center">
                                                                                <span>1</span>
                                                                                <button type="button"><i class="fa fa-arrow-up"></i></button>
                                                                                <div class="msg-action-dot">
                                                                                    <div class="dropdown">
                                                                                        <a class="action-dot" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            <i class="la la-ellipsis-v"></i>
                                                                                        </a>
                                                                                        <div class="dropdown-menu">
                                                                                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target=".report-modal-form">
                                                                                                <i class="la la-flag"></i> Report abuse
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end comment -->
                                                            <div class="question-replay-separator-wrap d-flex align-items-center justify-content-between pb-3">
                                                                <span class="widget-title font-size-16 primary-color"> 1 Replay</span>
                                                                <button class="btn swapping-btn" data-text-swap="Following replies" data-text-original="Follow replies">Follow replies</button>
                                                            </div>
                                                            <div class="section-block"></div>
                                                            <div class="question-answer-wrap">
                                                                <div class="comment">
                                                                    <div class="comment-avatar">
                                                                        <img class="avatar__img" alt="" src="images/team9.jpg">
                                                                    </div>
                                                                    <div class="comment-body">
                                                                        <div class="meta-data d-flex align-items-center justify-content-between">
                                                                            <div class="question-meta-content">
                                                                                <h3 class="comment__author"><a href="#" class="d-inline-block">David Luise</a> - Instructor</h3>
                                                                                <p class="comment__meta">
                                                                                    <span>3 hours ago</span>
                                                                                </p>
                                                                                <p class="comment-content">
                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                                </p>
                                                                            </div>
                                                                            <div class="question-upvote-action">
                                                                                <div class="number-upvotes pb-2 d-flex align-items-center">
                                                                                    <span>0</span>
                                                                                    <button type="button"><i class="fa fa-arrow-up"></i></button>
                                                                                    <div class="msg-action-dot">
                                                                                        <div class="dropdown">
                                                                                            <a class="action-dot" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                <i class="la la-ellipsis-v"></i>
                                                                                            </a>
                                                                                            <div class="dropdown-menu">
                                                                                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target=".report-modal-form">
                                                                                                    <i class="la la-flag"></i> Report abuse
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end comment -->
                                                                <div class="section-block"></div>
                                                                <div class="question-replay-input-wrap padding-top-35px">
                                                                    <div class="question-replay-body">
                                                                        <h3 class="widget-title font-size-16">Add Replay</h3>
                                                                        <div class="contact-form-action pt-4">
                                                                            <form method="post">
                                                                                <div class="input-box">
                                                                                    <div class="replay-action-bar">
                                                                                        <div class="btn-group">
                                                                                            <button class="btn" type="button" data-toggle="modal" data-target=".insert-link-modal-form" title="Insert link"><i class="la la-link"></i></button>
                                                                                            <button class="btn" type="button" data-toggle="modal" data-target=".upload-photo-modal-form" title="Upload an image"><i class="la la-photo"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <span class="la la-pencil input-icon"></span>
                                                                                        <textarea class="message-control form-control" name="message" placeholder="Write your response..."></textarea>
                                                                                    </div>
                                                                                    <div class="btn-box">
                                                                                        <button class="theme-btn">add an answer</button>
                                                                                    </div>
                                                                                </div><!-- end input-box -->
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- end replay-question-wrap -->
                                        <div class="question-overview-result-wrap">
                                            <div class="lecture-overview-item">
                                                <div class="contact-form-action">
                                                    <form method="post">
                                                        <div class="input-box">
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" name="search" placeholder="Search sections questions">
                                                                <span class="la la-search search-icon"></span>
                                                            </div>
                                                        </div><!-- end input-box -->
                                                    </form>
                                                </div><!-- end contact-form-action -->
                                            </div><!-- end lecture-overview-item -->
                                            <div class="lecture-overview-item mb-0">
                                                <div class="question-overview-result-header d-flex align-items-center justify-content-between pb-3">
                                                    <div class="question-result-item">
                                                        <h3 class="widget-title font-size-17">2 questions asked by student so far</h3>
                                                    </div>
                                                    <div class="question-result-item">
                                                        <button class="btn ask-new-question-btn">Ask a new question</button>
                                                    </div>
                                                </div>
                                                <div class="section-block"></div>
                                            </div><!-- end lecture-overview-item -->
                                            <div class="lecture-overview-item mt-0">
                                                <div class="question-list-container">
                                                    <div class="question-list-item">
                                                        <ul class="comments-list">
                                                            <li>
                                                                <div class="comment">
                                                                    <div class="comment-avatar">
                                                                        <img class="avatar__img" alt="" src="asset_home/images/team8.jpg">
                                                                    </div>
                                                                    <div class="comment-body">
                                                                        <div class="meta-data d-flex align-items-center justify-content-between">
                                                                            <div class="question-meta-content">
                                                                                <a href="javascript:void(0)">
                                                                                    <h3 class="comment__author">I am confused about the lesson on the two set Problem</h3>
                                                                                    <p class="comment-content">
                                                                                       I want understand when you are solving the intersection between let say setA and setB what is the first thing that you are
                                                                                        to consider with regards to ...
                                                                                    </p>
                                                                                </a>
                                                                            </div>
                                                                            <div class="question-upvote-action">
                                                                                <div class="number-upvotes pb-2 d-flex align-items-center">
                                                                                    <span>1</span>
                                                                                    <button type="button"><i class="fa fa-arrow-up"></i></button>
                                                                                </div>
                                                                                <div class="number-upvotes question-response d-flex align-items-center">
                                                                                    <span>1</span>
                                                                                    <button type="button" class="question-replay-btn"><i class="fa fa-comments"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="comment__meta">
                                                                            <span><a href="#">Alex Smith</a></span>
                                                                            <span><a href="#">Lecture 20</a></span>
                                                                            <span>3 hours ago</span>
                                                                        </p>
                                                                    </div>
                                                                </div><!-- end comment -->
                                                            </li>

                                                        </ul>
                                                        <div class="btn-box padding-top-35px text-center">
                                                            <button class="theme-btn theme-btn-light w-100" type="button">see more</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end lecture-overview-item -->
                                        </div>
                                    </div>
                                </div><!-- end tab-pane -->
                            </div>
                        </div><!-- end lecture-video-detail-body -->
                    </div><!-- end lecture-video-detail -->

                    <div class="section-block"></div>
                    <div class="footer-area section-bg padding-top-40px padding-bottom-40px">
                        <div class="container-fluid">
                            <div class="copyright-content copyright-content-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 column-lmd-half column-td-full">
                                        <div class="copyright-content-inner">
                                            <a href="index.html">
                                                <img src="asset_home/images/logo.png" alt="footer logo" class="footer__logo">
                                            </a>
                                            <p class="copy__desc">Copyright &copy; 2020 Wolo Afric</p>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-6 column-lmd-half column-td-full">
                                        <ul class="list-items">
                                            <li><a href="#">Terms</a></li>
                                            <li><a href="#">Privacy policy</a></li>
                                            <li><a href="#">Help and Support</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 column-lmd-half column-td-full">
                                        <div class="sort-ordering">
                                            <select class="sort-ordering-select">
                                                <option value="1">English</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end copyright-content -->
                        </div><!-- end container-fluid -->
                    </div><!-- end footer-area -->
                </div><!-- end course-dashboard-column -->
                <div class="course-dashboard-sidebar-column">
                    <button class="sidebar-open" type="button"><i class="la la-angle-left"></i> Lesson content</button>
                    <div class="course-dashboard-sidebar-wrap">
                        <div class="course-dashboard-side-heading d-flex align-items-center justify-content-between">
                            <h3 class="widget-title font-size-20">Lesson content</h3>
                            <button class="sidebar-close" type="button"><i class="la la-times"></i></button>
                        </div><!-- end course-dashboard-side-heading -->
                        <div class="course-dashboard-side-content">
                            <div class="accordion course-item-list-accordion" id="accordionCourseMenu">
                                <div class="card">
                                    <div class="card-header" id="collapseMenuOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="widget-title font-size-15 font-weight-semi-bold">Section 1: Sets & Set Theory</span>
                                                <div class="course-duration">
                                                    <span>1/5</span>
                                                    <span>21min</span>
                                                </div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="collapseMenuOne" data-parent="#accordionCourseMenu">
                                        <div class="card-body">
                                            <div class="course-content-list">
                                                <ul class="course-list">
                                                    <li class="course-item-link active">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb29">
                                                                <label for="chb29"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">1. Introduction to Sets</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="course-item-link">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb30">
                                                                <label for="chb30"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">2. Set Operations</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="course-item-link active-resource">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb31">
                                                                <label for="chb31"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">3. Set operations</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                    <div class="msg-action-dot">
                                                                        <div class="dropdown">
                                                                            <a class="theme-btn theme-btn-light" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="fa fa-folder-open mr-1"></i> Resources<i class="fa fa-angle-down ml-1"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                                    Quick-Start.zip
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="course-item-link">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb32">
                                                                <label for="chb32"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">4. Two set problem</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="course-item-link">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb33">
                                                                <label for="chb33"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">5. Three set problem</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="collapseMenuTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="widget-title font-size-15 font-weight-semi-bold">Section 2: Continuation Sets & Set Theory</span>
                                                <div class="course-duration">
                                                    <span>1/5</span>
                                                    <span>21min</span>
                                                </div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="collapseMenuTwo" data-parent="#accordionCourseMenu">
                                        <div class="card-body">
                                            <div class="course-content-list">
                                                <ul class="course-list">
                                                    <li class="course-item-link active">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb29">
                                                                <label for="chb29"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">1. Introduction to Sets</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="course-item-link">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb30">
                                                                <label for="chb30"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">2. Set Operations</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="course-item-link active-resource">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb31">
                                                                <label for="chb31"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">3. Set operations</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                    <div class="msg-action-dot">
                                                                        <div class="dropdown">
                                                                            <a class="theme-btn theme-btn-light" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="fa fa-folder-open mr-1"></i> Resources<i class="fa fa-angle-down ml-1"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                                    Quick-Start.zip
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="course-item-link">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb32">
                                                                <label for="chb32"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">4. Two set problem</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="course-item-link">
                                                        <div class="course-item-content-wrap">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb33">
                                                                <label for="chb33"></label>
                                                            </div>
                                                            <div class="course-item-content">
                                                                <h4 class="widget-title font-size-15 font-weight-medium">5. Three set problem</h4>
                                                                <div class="courser-item-meta-wrap">
                                                                    <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- end course-dashboard-sidebar-column -->
            </div><!-- end course-dashboard-container -->
        </div><!-- end course-dashboard-wrap -->
    </section><!-- end course-dashboard -->
    <!--======================================
            END COURSE-DASHBOARD
    ======================================-->

@endsection
