<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
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

Route::get('/searchbox', function () {
    return view('education.searchbox');
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

Route::get('/login', function () {
    return view('education.login');
});

Route::get('/registration', function () {
    return view('education.registration');
});
//--------------Main pages routes END--------------------



//--------------Admin panel routes START----------------
Route::get('/admin', function () {
    return view('AdminDashboard.template.index');
});

Route::get('/admin/library', function () {
    return view('AdminDashboard.template.library_admin');
});

Route::get('/admin/students', function () {
    return view('AdminDashboard.template.table_students');
});

Route::get('/admin/tutors', function () {
    return view('AdminDashboard.template.table_tutors');
});

Route::get('/admin/uploadbook', function () {
    return view('AdminDashboard.template.uploadBook');
});
//--------------Admin panel routes END----------------



//-------------Courses pages routes START----------------
Route::get('/courses/business', function () {
    return view('education.Business and Accounting');
});

Route::get('/courses/science', function () {
    return view('education.Science and Technology');
});

Route::get('/courses/webmaster', function () {
    return view('education.Web master');
});

Route::get('/courses/health', function () {
    return view('education.Health and Psychology');
});

Route::get('/courses/math', function () {
    return view('education.Mathamatics');
});
//-------------Courses pages routes END----------------
Route::get('/tutorEdit', function () {
    return view('education.editTutor');
});

//------------Student Routes START-----------------
Route::get('/student/show', [StudentController::class, 'index']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student/edit', [StudentController::class, 'edit']);

//------------Student Routes END------------------

Route::get("user",[UserController::class,'index']);
Route::post("registration",[userController::class,'addData']);

