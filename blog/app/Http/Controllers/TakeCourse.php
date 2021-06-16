<?php

namespace App\Http\Controllers;
use App\Models\Teacher;



use Illuminate\Http\Request;

class TakeCourse extends Controller
{
    public function takeCourse(String $name)
    {
        $teachers = Teacher::where('course', '=', $name)->get();

        return view('education.SearchResults', compact('teachers'));
    }
}
