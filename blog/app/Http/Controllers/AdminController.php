<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
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
