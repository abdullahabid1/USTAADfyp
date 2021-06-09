<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;

class userController extends Controller
{    
 
    function index()
    {
        return DB::select("select * from teachers");
    }

    
    function addData(Request $req)
    {
        $teacher = new Teacher;
        $teacher->firstName=$req->firstName;
        $teacher->lastName=$req->lastName;
        $teacher->email=$req->email;
        $teacher->phone=$req->phone;
        $teacher->password=$req->password;
        $teacher->gender=$req->gender;
        $teacher->save();
        return redirect('tutorEdit');

    }

}
