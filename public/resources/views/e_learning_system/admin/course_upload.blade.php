@extends('layout.app_admin')

@section('content')

    <div class="d-flex">
        <nav id="breadcrumbs" class="mb-3">
            <ul>
                <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
                <li><a href="#"> Course </a></li>
                <li>Create New Course</li>
            </ul>
        </nav>
    </div>



    <div class="card">
        <div class="card-header border-bottom-0 py-4">
            <h5> Course Manager </h5>
        </div>


        <ul class="uk-child-width-expand uk-tab"
            uk-switcher="connect: #course-edit-tab ; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
            <li class="uk-active"><a href="#"> Course Name</a></li>
            <li><a href="#">Description</a></li>
            <li><a href="#">Aim</a></li>
            <li><a href="#">Lessons</a></li>
            <li><a href="#">Preview</a></li>
            <li><a href="#">General</a></li>
            <li><a href="#">Finish</a></li>
        </ul>

        <div class="card-body">

        <form method="POST" action="{{url('store')}}">
            @csrf
            <ul class="uk-switcher uk-margin" id="course-edit-tab">
                <li>
                    <div class="row">
                        <div class="col-xl-9 m-auto">
                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="course_title">Course title<span
                                        required>*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="course_title" name="course_name"
                                           placeholder="Enter course name"
                                           value="" aria-placeholder="SHS 2 - Elective Mathematics ..." required="">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="course_title"> SHS Level<span
                                        required>*</span></label>
                                <div class="col-md-9">
                                    <select class="selectpicker" name="class">
                                        <option disabled>Choose</option>
                                        <option data-icon="uil-plus" value="SHS 1">SHS 1</option>
                                        <option data-icon="uil-plus" value="SHS 2">SHS 2</option>
                                        <option data-icon="uil-plus" value="SHS 3">SHS 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="course_title"> Subject <span
                                        required>*</span></label>
                                <div class="col-md-9">
                                    <select class="selectpicker" name="subject">
                                        <option disabled>Choose</option>
                                        <option data-icon="uil-plus" value="Core Mathematics "> Core Mathematics </option>
                                        <option data-icon="uil-plus" value="Integrated Science"> Integrated Science</option>
                                        <option data-icon="uil-plus" value=" Social Studies"> Social Studies</option>
                                        <option data-icon="uil-plus" value="English Language"> English Language</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="row">
                        <div class="col-xl-9 m-auto">
                            <div class="form-group row mb-3">



                            
                                <label class="col-md-3 col-form-label" for="short_description">Detailed
                                    description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="short_description"
                                                          class="form-control" required placeholder="Give a description of the course that you are uploading to wolo platform"></textarea>
                                </div>
                            </div>


                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label" for="short_description">Short
                                    keywords</label>
                                <div class="col-md-9">
                                                <textarea name="keyword" id="short_description"
                                                          class="form-control" placeholder="Enter Course Keywords" required></textarea>
                                </div>
                            </div>



                        </div>
                    </div>


                </li>

                <li>

                    <div class="row justify-content-center">
                        <div class="col-xl-9">

                            <!-- <button class="btn btn-default mb-3" onclick="createNewElement();"> <i
                                    class='uil-plus'></i> Add more </button> -->

                            <input type='text' name="course_aim" class='uk-input' placeholder="Add course aim separate them with comma (,)">

                            <div id="newElementId"> </div>


                        </div>
                    </div>
                </li>

                <li>


                    <div class="row">
                        <div class="col-xl-10 m-auto">
                            <ul class="c-curriculum" uk-accordion>
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                        </i>Section 1</a>
                                    
                                    <div class="uk-accordion-content">
                                        <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                            <li>
                                                <div class="sec-list-item">
                                                        <div style="margin-top: 10px" class="col-md-12">
                                                            <input type='text' name="section_one" class='uk-input' placeholder='Enter section'>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_one" class='video_upload uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <label class="custom-file-upload">
                                                            <input type='file' name="video_one" class='uk-input'>
                                                            Attach Video
                                                        </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_two" class='video_upload uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_two" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_three" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_three" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_four" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_four" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_five" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_five" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                         

                                        </ul>
                                    </div>
                                </li>
                               
                                <li>
                                    <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                        </i>Section 2 </a>
                                   
                                    <div class="uk-accordion-content">
                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                            <li>
                                                <div class="sec-list-item">
                                                        <div style="margin-top: 10px" class="col-md-12">
                                                            <input type='text'  name="section_two" class='uk-input' placeholder='Enter section'>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_six" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_six" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_seven" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_seven" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_eight" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_eight" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_nine" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_nine" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_ten" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_ten" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                         

                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                        </i>Section 3 </a>
                                   
                                    <div class="uk-accordion-content">
                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                            <li>
                                                <div class="sec-list-item">
                                                        <div style="margin-top: 10px" class="col-md-12">
                                                            <input type='text'  name="section_three" class='uk-input' placeholder='Enter section'>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_eleven" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_eleven" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_twelve" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_twelve" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_thirtheen" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_thirtheen" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_foutheen" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_fourtheen" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_fiftheen" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_fiftheen" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                         

                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                        </i>Section 4 </a>
                                   
                                    <div class="uk-accordion-content">
                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                            <li>
                                                <div class="sec-list-item">
                                                        <div style="margin-top: 10px" class="col-md-12">
                                                            <input type='text' name="section_four" class='uk-input' placeholder='Enter section'>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_sixtheen" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_sixtheen" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_seventheen" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_seventheen" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_eigihteen" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_eighteen" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_nintheen" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_nintheen" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text'  name="lesson_twenty" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file'  name="video_twenty" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                         

                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                        </i>Section 5 </a>
                                   
                                    <div class="uk-accordion-content">
                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                            <li>
                                                <div class="sec-list-item">
                                                        <div style="margin-top: 10px" class="col-md-12">
                                                            <input type='text' name="section_five" class='uk-input' placeholder='Enter section'>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_twenty_one" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_twenty_one" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_twenty_two" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_twenty_two" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_twenty_three" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_twenty_three" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_twenty_four" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_twenty_four" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_twenty_five" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_twenty_five" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                         

                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                        </i>Section 6</a>
                                   
                                    <div class="uk-accordion-content">
                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                            <li>
                                                <div class="sec-list-item">
                                                        <div style="margin-top: 10px" class="col-md-12">
                                                            <input type='text' name="section_six" class='uk-input' placeholder='Enter section'>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_twenty_six" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_twenty_six" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_twenty_seven" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_twenty_seven" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_twenty_eight" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_twenty_eight" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_twenty_nine" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_twenty_nine" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_thirty" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_thirty" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                         

                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                        </i>Section 7 </a>
                                   
                                    <div class="uk-accordion-content">
                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                            <li>
                                                <div class="sec-list-item">
                                                        <div style="margin-top: 10px" class="col-md-12">
                                                            <input type='text' name="section_seven" class='uk-input' placeholder='Enter section'>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_thirty_one" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_thirty_one" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_thirty_two" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_thirty_two" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_thirty_three" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_thirty_three" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_thirty_four" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_thirty_four" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sec-list-item">
                                                <div  class="col-md-8">
                                                            <input type='text' name="lesson_thirty_five" class="video_upload" class='uk-input' placeholder='Enter lesson'>&nbsp &nbsp &nbsp &nbsp
                                                            
                                                        </div>
                                                    <div>
                                                        <div class="btn-act">
                                                        <button class="custom-file-upload">
                                                            <input type='file' name="video_thirty_five" class='uk-input '>
                                                            Attach Video
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                         

                                        </ul>
                                    </div>
                                </li>

                            </ul>


                        </div>
                    </div>






                </li>

                <li>

                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <div class="form-group row mb-3">
                                <div class="col-md-9">
                                <!-- <div>
                                    <div class="btn-act">
                                        <label class="custom-file-upload">
                                            <input type='file' class='uk-input'>
                                            <br>
                                                Attach Video
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                        </div> <!-- end col -->
                        
                    </div>


                </li>



                <li>

                    <div class="row justify-content-center">

                        <div class="col-xl-9">

                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label">Course price (GH)</label>
                                <div class="col-md-9">
                                    <input type="number" name="course_price" class="form-control" placeholder="Enter  price">
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-9">

                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label">Discounted
                                    price (GH)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="discounted_price" placeholder="Enter  price">
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-9">

                            <div class="form-group row mb-3">
                                <label class="col-md-3 col-form-label">Teacher Name</label>
                                <div class="col-md-9">
                                    <input  type="text" class="form-control" name="teacher_name" placeholder="Enter  teacher name">
                                </div>
                            </div>

                        </div>
                    </div>
                </li>

                <li>

                    <div class="row">
                        <div class="col-12 my-lg-5">
                            <div class="text-center">
                                <h2 class="mt-0"><i class="icon-feather-check-circle text-success"></i></h2>
                                <h3 class="mt-0">Thank you !</h3>

                                <p class="w-75 mb-2 mx-auto"> Submit This Course For Review  </p>

                                <div class="mb-3 mt-3">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>


                </li>

            </ul>
        </form>
        </div>

    </div>


@endsection
