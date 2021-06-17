<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        print(session()->get('loginAs'));

        if($this->IsAlreadyLoggedIn())
        {
            return redirect($this->getRedirectPath());
        }
        else
        {
            return view('education.login');
        }
    }

    public function processLogin(Request $request)
    {
        if(!$this->IsAlreadyLoggedIn())
        {
            $email = $request->email;
            $password = $request->password;
            $loginAs = $request->loginAs;

            if($loginAs == "Admin")
            {
                $admin = Admin::where('email', '=', $email)->where('password','=',$password)->first();

                session()->put('loginID', $admin->id);
                session()->put('loginAs', 'admin');
            }
            else if($loginAs == "Tutor")
            {
                $teacher = Teacher::where('email', '=', $email)->where('password','=',$password)->first();

                session()->put('loginID', $teacher->id);
                session()->put('loginAs', 'tutor');
            }
            else
            {
                $student = Student::where('email', '=', $email)->where('password','=',$password)->first();

                session()->put('loginID', $student->id);
                session()->put('loginAs', 'student');
            }
        }

        return redirect($this->getRedirectPath());
    }

    public function IsAlreadyLoggedIn()
    {
        return (session()->get('loginID') != null && session()->get('loginAs') != null);
    }

    public function getRedirectPath()
    {
        $loginAs = session()->get('loginAs');
        $loginID = session()->get('loginID');
        $path = "";

        if($loginAs == "admin")
        {
            $path = '/admin/'.$loginID;
        }
        else if($loginAs == "tutor")
        {
            $path = '/tutor/'.$loginID.'/show/private';
        }
        else if($loginAs == "student")
        {
            $path = '/student/'.$loginID.'/show/dashboard';
        }

        return $path;
    }
    
}
