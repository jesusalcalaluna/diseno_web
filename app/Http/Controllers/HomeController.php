<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function verHome(){
        return view("youtube/home");
    }

    function reproducirvideo(){
    	return view("youtube/reproducirvideo");
    }
    function subir_video(){
        return view("youtube/subir_vide");
    }
}
