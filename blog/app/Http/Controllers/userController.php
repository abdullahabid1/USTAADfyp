<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{    
    function print()
    {
        echo "test";
    }

    function getData(Request $req)
    {
        return $req->input();
    }

}
