<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('Student.studenttest', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all());

        session()->put('loginID', $student->id);
        session()->put('loginAs', 'student');
        session()->put('loginName', $student->firstname);

        return redirect('/student/'.$student->id.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }

    public function showDashboard(Student $student)
    {
        if(!$this->loginCheck())
        {
            return redirect('/login');
        }
        return view('student.dashboard', compact('student'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        if(!$this->loginCheck())
        {
            return redirect('/login');
        }
        return view('Student.edit', compact("student"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $this->SaveImage($student);

        return view('student.dashboard', compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/');
    }

    public function SaveImage(Student $student)
    {
        $image = request()->file('image');
        $filename = $student->id . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('/images/student'), $filename);

        $student->update([
            'image' => '/images/student/'.$filename
            ]); 
    }

    public function logout()
    {
        session()->forget('loginID');
        session()->forget('loginAs');

        return redirect('/login');
    }

    public function loginCheck()
    {
        return (session()->get('loginID') != null && (session()->get('loginAs') == 'student' || session()->get('loginAs') == 'admin'));
    }
}
