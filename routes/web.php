<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $data=[];
    $data['name'] = "bian";
    $data['age'] = 27;

    return view('welcome',$data);
});


Route::namespace('Front')->group(function () {
    Route::get('users','UserController@ShowUser');
});

Route::get('users/index','Front\UserController@getindex');


Route::get('/landing', function () {

    return view('landing');
});

Route::get('/about', function () {

    return view('about');
});
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
