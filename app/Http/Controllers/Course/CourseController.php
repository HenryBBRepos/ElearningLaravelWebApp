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

    public function __construct(Course $course)
    {
        $this->course_fillable =$course->getFillable();
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

        $fillable = array_diff($this->course_fillable,['course_image']);
        if($course = Course::create($request->only($fillable))){
            if ($course) {
                $img = $this->uploadOne($request);
                $course->update([
                    'course_image'=>$img,
                 ]);


            }
            return redirect()->route('add_section');
           //return redirect()->back()->with(['status'=>'success','status_code'=>200,'data'=>$course]);
        }

        Course::create($request->all());

        return redirect()->back();

    }
    public function show($id)
    {
        return view('e_learning_system.student.lesson_detail', ['course' => Course::findOrFail($id)]);

    }

    public function uploadOne(Request $request, $folder = 'images',  $disk = 'public')
    {


        $filename = "wolosys_img-" . random_int(3000, 10000000);
        $file =  $request->file('course_image')[0] ;
        return $file->storeAs($folder, $filename . "." . $file->getClientOriginalExtension());

    }

}

