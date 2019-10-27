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

Route::get('/', 'HomeController@verHome');

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

route::get('/login', 'loginController@viewLogin');

route::get('/register', 'formRegisterController@viewFormRegister');

// route::get('/youtube', 'HomeController@verHome');