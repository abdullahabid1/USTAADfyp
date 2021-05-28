<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('Admin Dashboard.template.UploadBook');
});

Route::get('/courses', function () {
    return view('education.courses');
});

Route::get('/library', function () {
    return view('education.blog');
});


Route::get('/login', function () {
    return view('education.login');
});

Route::get('/reg', function () {
    return view('education.registration');
});

Route::get('/searchbox', function () {
    return view('education.search.searchbox');
});

Route::get("user",[UserController::class,"print"]);
Route::view("log","users");