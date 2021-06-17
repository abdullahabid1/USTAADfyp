<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $teacher=Teacher::create($request->all());
        $teacher->save();

        session()->put('loginID', $teacher->id);
        session()->put('loginAs', 'tutor');

        return view('Teacher.edit',compact('teacher'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function showPublic(Teacher $teacher)
    {
        return view('Teacher.public',compact('teacher'));
    }

    public function showPrivate(Teacher $teacher)
    {
        if(!$this->loginCheck()())
        {
            return redirect('/login');
        }
        return view('Teacher.private',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        if(!$this->loginCheck())
        {
            return redirect('/login');
        }
        return view('Teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $this->SaveImage($teacher);
        return view("Teacher.private", compact('teacher'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function SaveImage(Teacher $teacher)
    {
        $image = request()->file('image');
        $filename = $teacher->id . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('/images/teacher'), $filename);

        $teacher->update([
            'image' => '/images/teacher/'.$filename
            ]); 
    }
    public function destroy(Student $student)
    {
        $student->delete();
    }
    
    
    public function logout()
    {
        session()->forget('loginID');
        session()->forget('loginAs');

        return redirect('/login');
    }

    public function loginCheck()
    {
        return (session()->get('loginID') != null && session()->get('loginAs') != null);
    }
}
