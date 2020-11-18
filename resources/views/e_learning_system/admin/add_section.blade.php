@extends('layout.app_admin')

@section('content')


<div class="dashboard-content-wrap">
        <div class="container-fluid">


            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">Submit Course</h3>
                </div>
            </div>
            <form action="{{route('section.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">Add Section</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                <div class="col-lg-6">
                                                        <div class="form-group">
                                                        <label class="label-text">Section<span class="primary-color-2 ml-1">*</span></label>
                                                            <div class="sort-ordering user-form-short">
                                                                <select name="section" style="width: 100%;height:500px!important" class="js-example-basic-multiple js-states form-control js-example-tags" id="id_label_multiple">
                                                                    <option value="0" selected="">Select Section</option>
                                                                    <option value="1">Example of section</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Lesson<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="lesson" placeholder="Enter Lesson here">
                                                        <span class="la la-play-circle input-icon"></span>
                                                    </div>
                                                </div>
                                                    </div>


                                                </div>
                                            </div><!-- end col-lg-12 -->

                                        </div><!-- end row -->

                                </div>
                            </div>
                        </div><!-- end card-box-shared-body -->
                    </div><!-- end card-box-shared -->
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">Include Video</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="input-box">
                                                    <label class="label-text">Video Name<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="video_name" placeholder="Video name">
                                                        <span class="la la-play input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="input-box">
                                                    <label class="label-text">Video URL<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="video_url" placeholder="Video URL">
                                                        <span class="la la-link input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="input-box">
                                                    <label class="label-text">Lesson Video<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group mb-0">
                                                        <div class="upload-btn-box course-video-btn">

                                                                <input type="file" name="lesson_video" class="filer_input">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                        </div><!-- end row -->

                                </div>
                            </div>
                        </div><!-- end card-box-shared-body -->
                    </div><!-- end card-box-shared -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <button class="theme-btn" type="submit">submit now</button>
                </div>
            </div><!-- end row -->
            </form>
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
