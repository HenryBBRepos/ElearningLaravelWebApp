<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class CourseController extends Controller
{
    //
    
    public function index()
    {

        $courses = Course::all();
        $courses = Course::paginate(4);

        return view('home.index', ['courses' => $courses]);

    }
   
    

    public function store(Request $request)
    {
        
        $path = $request->file('video_one','video_two','video_three','video_four','video_five'
                                ,'video_six','video_seven','video_eight','video_nine','video_ten'
                                ,'video_eleven','video_twelve','video_thirteen','video_fourteen'
                                ,'video_fifteen','video_sixteen','video_seventeen','video_eighteen'
                                ,'video_nineteen','video_twenty','video_twenty_one','video_twenty_two'
                                ,'video_twenty_three','video_twenty_four','video_twenty_five','video_twenty_six'
                                ,'video_twenty_seven','video_twenty_eight','video_twenty_nine','video_thirty'
                                ,'video_thirty_one','video_thirty_two','video_thirty_three','video_thirty_four'
                                ,'video_thirty_five')->store('videos');

       // return ['path'=>$path,'upload'=>'success'];
        
        Course::create($request->all());

        return redirect()->back();

    }
    public function show($id)
    {
        return view('e_learning_system.student.lesson_detail', ['course' => Course::findOrFail($id)]);

    }

}

