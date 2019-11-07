<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verificarController extends Controller
{
    function verVerificar(){
        return view("youtube/verificarcuenta");
    }
}
