<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videosController extends Controller
{
    //
    function viewvideosgustados()
    {
        return view('youtube/videosgustados');
    }
}
