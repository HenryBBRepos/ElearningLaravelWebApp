<?php

namespace App\Http\Controllers\Auth\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginStudentController extends Controller
{
    //
    public function login(){
        return view('registrations.sign_in_student');
    }

    public function authenticate(Request $request)
    {
//        $request->validate([
//            'email' => 'required|email',
//            'password' => 'required',
//
//        ]);

//        $credentials = $request->only('email', 'password');
//
//        if (Auth::attempt($credentials)) {
//            return redirect()->intended('core_subject');
//        }

        return redirect('core_subject');

        //return redirect('login')->with('error', 'Oops! You have entered invalid credentials');
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
//    public function core_subject()
//    {
//        return view('home.core_subject');
//    }


}
