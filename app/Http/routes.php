<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sign-up', function () {
    return view('sign_up');
});

Route::get('how-it-works', function () {
    return view('works');
});

Route::resource('trades', 'TradesController');

Route::auth();

Route::get('/home', 'HomeController@index');
