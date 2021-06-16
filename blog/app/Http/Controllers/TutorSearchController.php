<?php

namespace App\Http\Controllers;


use App\Models\Teacher;
use Illuminate\Http\Request;

class TutorSearchController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('education.searchbox', compact('teachers'));
    }

    public function search(Request $req)
    {
        
        $priceArray = explode('-', $req->price);

        $priceArray[0] = substr($priceArray[0], 1, strlen($priceArray[0]));
        $priceArray[1] = substr($priceArray[1], 1, strlen($priceArray[1]));

        $teachers = Teacher::where('course', '=', $req->courses)
            ->where('city', '=', $req->city)
            ->where('price', '>=', $priceArray[0])
            ->where('price', '<=', $priceArray[1])
            ->orwhere('subject1', '=', $req->subject)
            ->orwhere('subject2', '=', $req->subject)
            ->orwhere('subject3', '=', $req->subject)->get();

        return view('education.SearchResults', compact('teachers'));
    }
}
