<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function verHome(){
        return view("youtube/home");
    }
}
