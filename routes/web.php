<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'Pages\PagesController@index');
Route::get('/core_subject', 'Pages\PagesController@core_subject');
Route::get('/elective_subject', 'Pages\PagesController@elective_subject');

//Student Routes
Route::get('/sign_up_student', 'Pages\PagesController@sign_up_student');
Route::get('/sign_in_student', 'Pages\PagesController@sign_in_student');
Route::get('/dashboard', 'Pages\PagesController@dashboard');
Route::get('/quiz_overview', 'Pages\PagesController@quiz_overview');
Route::get('/quiz_question', 'Pages\PagesController@quiz_question');
Route::get('/quiz_result', 'Pages\PagesController@quiz_result');
Route::get('/lesson', 'Pages\PagesController@lesson');
Route::get('/lesson_detail', 'Pages\PagesController@lesson_detail');

Route::get('register', 'Auth\Student\RegisterStudentController@register');
Route::post('register', 'Auth\Student\RegisterStudentController@store');
Route::get('login', 'Auth\Student\LoginStudentController@login')->name('login');
Route::post('authenticate', 'Auth\Student\LoginStudentController@authenticate');
Route::get('logout', 'Auth\Student\LoginStudentController@logout')->name('logout');

Route::get('index', 'Auth\Student\LoginStudentController@index')->name('index');
Route::get('forget_password', 'Auth\Student\ForgetPasswordStudentController@getEmail');
Route::post('forget_password', 'Auth\Student\ForgetPasswordStudentController@postEmail');
Route::get('reset_password/{token}', 'Auth\Student\ResetPasswordStudentController@getPassword');
Route::post('reset_password', 'Auth\Student\ResetPasswordStudentController@updatePassword');
//Teacher Routes
Route::get('/sign_in_teacher', 'Pages\PagesController@sign_in_teacher');
Route::get('/sign_up_teacher', 'Pages\PagesController@sign_up_teacher');
Route::get('/dashboard_teacher', 'Pages\PagesController@dashboard_teacher');


//admin
//Route::get('Pages\PagesController@course_upload', '/course_upload');
Route::post('store', 'Course\CourseController@store')->name('course.store');
Route::post('/add-section', 'SectionController@store')->name('section.store');


Route::get('/add-course', 'Pages\PagesController@add_course');
Route::get('/add-section', 'Pages\PagesController@add_section')->name("add_section");


Route::group(['prefix' => 'course', 'namespace' => 'Course'], function () {
    Route::get('/{id}', 'CourseController@show')->name('lesson_detail');
});

