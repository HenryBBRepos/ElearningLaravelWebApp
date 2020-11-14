<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    //General Controllers

    public function index(){

        $courses = Course::paginate(3);
        return view('home.index', ['courses' => $courses]);

    }
    public function elective_subject(){
        return view('home.elective_subject');
    }

    //Student Controllers

    public function sign_up_student(){
        return view('registrations.sign_up_student');
    }
    public function sign_in_student(){
        return view('registrations.sign_in_student');
    }
    public function dashboard(){
        return view('e_learning_system.student.dashboard');
    }
    public function quiz_overview(){
        return view('e_learning_system.student.quiz_overview');
    }
    public function quiz_question(){
        return view('e_learning_system.student.quiz_question');
    }
    public function quiz_result(){
        return view('e_learning_system.student.quiz_result');
    }
    public function lesson(){
        return view('e_learning_system.student.lesson');
    }
    public function lesson_detail(){
        return view('e_learning_system.student.lesson_detail');
    }

    //Teacher Controllers
    public function sign_up_teacher(){
        return view('registrations.sign_up_teacher');
    }
    public function sign_in_teacher(){
        return view('registrations.sign_in_teacher');
    }
    public function dashboard_teacher(){
        return view('e_learning_system.teacher.dashboard_teacher');
    }


    //Admin Controllers

        
    public function add_course(){
        return view('e_learning_system.admin.add_course');
    }

    public function add_section(){
        return view('e_learning_system.admin.add_section');
    }


    public function course_upload(){

        return view('e_learning_system.admin.course_upload');
    }
}
