<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TutorSearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TakeCourse;

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

//---------main page routes START-----------------
Route::get('/', function () {
    return view('education.index');
});

Route::get('/courses', function () {
    return view('education.courses');
});

Route::get('/teachers', function () {
    return view('education.teachers');
});

Route::get('/about', function () {
    return view('education.about');
});

Route::get('/pricing', function () {
    return view('education.pricing');
});

Route::get('/library', function () {
    return view('education.library');
});
Route::get('/ebooks', function () {
    return view('education.ebooks');
});

Route::get('/contact', function () {
    return view('education.contact');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/process', [LoginController::class, 'processLogin']);

Route::get('/registration', function () {
    return view('education.registration');
});
//--------------Main pages routes END--------------------



//--------------Admin panel routes START----------------
Route::get('/admin/{admin}', [AdminController::class, 'index']);
Route::get('/admin/{admin}/students', [AdminController::class, 'studentList']);
Route::get('/admin/{admin}/tutors', [AdminController::class, 'tutorList']);


Route::get('/admin/{admin}/library', [AdminController::class, 'library']);
Route::get('/admin/{admin}/uploadbook', function () {
    return view('AdminDashboard.template.uploadBook');
});

Route::post('/admin/{admin}/uploadbook', [AdminController::class, 'uploadBook']);

Route::get('/admin/{admin}/logout', [AdminController::class, 'logout']);
//--------------Admin panel routes END----------------



//-------------Tutor Finding routes START----------------

Route::get('/courses/takecourse/{name}',[TakeCourse::class,'takeCourse']);

Route::get('/search', [TutorSearchController::class,'index']);
Route::post('/search/tutor', [TutorSearchController::class,'search']);

//-------------Tutor Finding routes END----------------

//------------Student Routes START-----------------
Route::get('/student/show', [StudentController::class, 'index']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student/{student}/show/dashboard', [StudentController::class, 'showDashboard']);
Route::get('/student/{student}/show', [StudentController::class, 'show']);
Route::get('/student/{student}/edit', [StudentController::class, 'edit']);
Route::PATCH('/student/{student}', [StudentController::class, 'update']);
Route::DELETE('/student/{student}', [StudentController::class, 'destroy']);
Route::get('/student/{student}/logout', [StudentController::class, 'logout']);

//------------Student Routes END------------------

//------------Teacher Routes start------------------
Route::post('/teacher', [TeacherController::class, 'store']);
Route::get('/teacher/{teacher}/edit', [TeacherController::class, 'edit']);
Route::get('/teacher/{teacher}/show/private', [TeacherController::class, 'showPrivate']);
Route::get('/teacher/{teacher}/show/public', [TeacherController::class, 'showPublic']);
Route::PATCH('/teacher/{teacher}', [TeacherController::class, 'update']);
Route::DELETE('/teacher/{teacher}', [TeacherController::class, 'destroy']);
Route::get('/teacher/{teacher}/logout', [TeacherController::class, 'logout']);
//------------Student Routes END------------------

