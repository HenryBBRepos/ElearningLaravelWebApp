<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class CourseController extends Controller
{
   private $course_fillable ;
   private $section_fillable ;
   private $lesson_fillable ;
    public function __construct(Course $course,Section $section,Lesson $lesson)
    {
        $this->course_fillable =$course->getFillable();
        $this->section_fillable =$section->getFillable();
        $this->lesson_fillable =$lesson->getFillable();
    }

    //

    public function index()
    {

        $courses = Course::all();
        $courses = Course::paginate(4);

        return view('home.index', ['courses' => $courses]);

    }



    public function store(Request $request)
    {

        if($course = Course::create($request->only($this->course_fillable))){
            foreach ($request->section_names as $section){
                $course->sections->create($request->only($this->section_fillable));
            }
        }



//        $path = $request->file('video_one','video_two','video_three','video_four','video_five'
//                                ,'video_six','video_seven','video_eight','video_nine','video_ten'
//                                ,'video_eleven','video_twelve','video_thirteen','video_fourteen'
//                                ,'video_fifteen','video_sixteen','video_seventeen','video_eighteen'
//                                ,'video_nineteen','video_twenty','video_twenty_one','video_twenty_two'
//                                ,'video_twenty_three','video_twenty_four','video_twenty_five','video_twenty_six'
//                                ,'video_twenty_seven','video_twenty_eight','video_twenty_nine','video_thirty'
//                                ,'video_thirty_one','video_thirty_two','video_thirty_three','video_thirty_four'
//                                ,'video_thirty_five')->store('videos');

       // return ['path'=>$path,'upload'=>'success'];

        Course::create($request->all());

        return redirect()->back();

    }
    public function show($id)
    {
        return view('e_learning_system.student.lesson_detail', ['course' => Course::findOrFail($id)]);

    }

}

