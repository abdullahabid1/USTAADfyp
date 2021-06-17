<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\Library;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $teachers = Teacher::all();
        $books = Library::all();

        return view('AdminDashboard.template.index', compact('students', 'teachers', 'books'));
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

    public function library()
    {
        $books = Library::all();

        return view('AdminDashboard.template.library_admin', compact('books'));
    }

    public function uploadBook(Request $request)
    {
        $lib = Library::create($request->all());

        $this->SaveImage(Library::get()->last());
        $this->SaveFile(Library::get()->last());

        return redirect('/admin/'.session()->get('loginID'));
    }

    public function SaveImage(Library $library)
    {
        $image = request()->file('image');
        $filename = $library->id . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('/images/library'), $filename);

        $library->update([
            'image' => '/images/library/'.$filename
            ]); 
    }

    public function SaveFile(Library $library)
    {
        $file = request()->file('file');
        $filename = $library->id . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('/files/library'), $filename);

        $library->update([
            'file' => '/files/library/'.$filename
            ]); 
    }
}
