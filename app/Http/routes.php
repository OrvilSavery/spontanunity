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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


//Index
Route::get('/', function () {
    return view(Auth::guest() ? 'index' : 'home');
});

Route::group(['before' => 'auth'], function(){
    //Logged in Homepage
    Route::get('home', function() {
        return view('home');
    });
});

//send email with initial event
Route::get('emails/events','EmailsController@sendEvents');