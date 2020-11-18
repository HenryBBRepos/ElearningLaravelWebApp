@extends('layout.app_admin')

@section('content')


<div class="dashboard-content-wrap">
        <div class="container-fluid">
           
        
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">Submit Course</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">Course Information</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="input-box">
                                                    <label class="label-text">Course Title<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="course_name" placeholder="Course title">
                                                        <span class="la la-file-text-o input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="input-box">
                                                    <label class="label-text">Teacher Name<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="teacher_name" placeholder="Enter content creator">
                                                        <span class="la la-user input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="input-box">
                                                    <label class="label-text">Course Hours<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="course_hours" placeholder="e.g 2 Hours">
                                                        <span class="la la-clock-o input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="input-box">
                                                    <label class="label-text">Course Price<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="course_price" placeholder="e.g 79">
                                                        <span class="la la-dollar input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="input-box">
                                                    <label class="label-text">Course Aim<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="course_aim" placeholder="Write course aims here">
                                                        <span class="la la-globe input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-12">
                                            
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                        <label class="label-text">SHS Level<span class="primary-color-2 ml-1">*</span></label>
                                                            <div class="sort-ordering user-form-short">
                                                                <select class="sort-ordering-select" name="class">
                                                                    <option value="0" selected="">SHS 1</option>
                                                                    <option value="1">SHS 2</option>
                                                                    <option value="2">SHS 3</option>                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                        <label class="label-text">Subject<span class="primary-color-2 ml-1">*</span></label>
                                                            <div class="sort-ordering user-form-short">
                                                                <select class="sort-ordering-select" class="subject">
                                                                    <option value="0" selected="">Core Mathematics</option>
                                                                    <option value="1">Social Studies</option>
                                                                    <option value="2">Integrated Science</option>
                                                                    <option value="2">Chemistry</option> 
                                                                    <option value="2">Economics</option>                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                 
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Course Description<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <textarea class="message-control form-control" name="description" placeholder="Write course description here"></textarea>
                                                        <span class="la la-pencil input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Course Keywords<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <textarea class="message-control form-control" name="keyword" placeholder="Write course keywords e.g. binary,subset etc"></textarea>
                                                        <span class="la la-pencil input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                             <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Upload an Image<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group mb-0">
                                                        <div class="upload-btn-box course-photo-btn">
                                                            <form action="#" method="post" enctype="multipart/form-data">
                                                                <input type="file" name="course_image" class="filer_input" multiple="multiple">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div>
                            </div>
                        </div><!-- end card-box-shared-body -->
                    </div><!-- end card-box-shared -->
                   
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <button class="theme-btn" type="submit">Submit Course</button>
                </div>
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-content pt-0 pb-4 border-top-0 text-center">
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