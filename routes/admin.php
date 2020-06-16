<?php


use Illuminate\Support\Facades\Route;

Route::get('/test1', function () {
    return "welcome";
});

Route::group(['namespace' =>'Admin'],function()
{
    Route::get('second','SecondController@showsecond')->middleware('auth');

    Route::get('second1','SecondController@showsecond1');
    Route::get('second2','SecondController@showsecond2');
    Route::get('second3','SecondController@showsecond3');
    Route::get('second4','SecondController@showsecond4');
});

//route::get('login',function()
//{
//    return "we must login before go to the route";
//
//})->name('login');

