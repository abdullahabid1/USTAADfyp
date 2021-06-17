<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $teachers = Teacher::all();

        return view('AdminDashboard.template.index', compact('students', 'teachers'));
    }

    public function studentList()
    {
        $students = Student::all();
        return view('AdminDashboard.template.table_students', compact('students'));
    }

    public function tutorList()
    {
        $teachers = Teacher::all();
        return view('AdminDashboard.template.table_tutors', compact('teachers'));
    }

    public function logout()
    {
        session()->forget('loginID');
        session()->forget('loginAs');

        return redirect('/login');
    }

    public function loginCheck()
    {
        return (session()->get('loginID') != null && session()->get('loginAs') == 'admin');
    }
}
