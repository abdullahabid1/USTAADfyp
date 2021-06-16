<?php

namespace App\Http\Controllers;
use App\Models\Teacher;



use Illuminate\Http\Request;

class TakeCourse extends Controller
{
    public function takeCourse(String $name)
    {
        print($name);
        $teachers = Teacher::where('course', '=', $name)->get();
        foreach ($teachers as $t) {
            print($t->firstName);
        }
    }
}
