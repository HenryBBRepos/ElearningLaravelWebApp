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
           return redirect()->back()->with(['status'=>'success','status_code'=>200,'data'=>$course]);
        }

        Course::create($request->all());

        return redirect()->back();

    }
    public function show($id)
    {
        return view('e_learning_system.student.lesson_detail', ['course' => Course::findOrFail($id)]);

    }

}

