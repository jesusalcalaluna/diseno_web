<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/juan', function () {
    return view('juan');
});
route::get("/holamundo",function(){
    return view("holamundo");
});



route::get("/mario", function() {
    return view("mario");
});

/////////////                     YouTube                      //////////////////


Route::get('/', 'HomeController@verHome');

route::get('/login', 'loginController@viewLogin');

route::get('/register', 'formRegisterController@viewFormRegister');

route::get('/suscripciones_pagos', 'suscripcionesController@verSuscripciones');

route::get('/verificarcuenta', 'verificarController@verVerificar');

// route::get('/youtube', 'HomeController@verHome');


// vistas del johnny
Route::get('/reproducirvideo', 'HomeController@reproducirvideo');

//vistas del Alcala
Route::get('/videosgustados','videosController@viewvideosgustados');

route::get('/subir_video','HomeController@subir_video');
