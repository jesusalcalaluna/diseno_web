<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class suscripcionesController extends Controller
{
    function verSuscripciones(){
        return view("youtube/suscripciones_pagos");
    }
}
