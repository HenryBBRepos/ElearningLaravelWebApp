<?php

namespace App\Http\Controllers\Auth\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class ForgetPasswordStudentController extends Controller
{
    //
    public function getEmail()
    {

        return view('registrations.email_student');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:students',
        ]);

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('registrations.verify_student',['token' => $token], function($message) use ($request) {
            $message->from($request->email);
            $message->to('henrybaah2016@gmail.com');
            $message->subject('Reset Password Notification');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
}
