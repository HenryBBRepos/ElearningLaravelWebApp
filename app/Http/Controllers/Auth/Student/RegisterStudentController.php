<?php

namespace App\Http\Controllers\Auth\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class RegisterStudentController extends Controller
{
    //
    public function register()
    {
        return view('registrations.sign_up_student');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'school_name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);


        Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'school_name' => $request->school_name,
            'class' => $request->class,
            'country' => $request->country,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_confirmation' => Hash::make($request->password_confirmation),
        ]);
        return redirect('index');
    }
}
