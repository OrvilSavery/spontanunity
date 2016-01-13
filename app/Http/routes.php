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
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('home', function(){ return redirect('/'); });

//Index
Route::get('/', 'PageController@index');

Route::group(['middleware' => 'auth'], function () {

    get('dashboard', 'PageController@dashboard');

    Route::group(['prefix' => 'join'], function() {
        get('categories', 'JoinController@categories');
        Route::resource('/', 'JoinController');
    });
    Route::resource('categoryAccount', 'CategoryAccountController');
    Route::group(['prefix' => 'account'], function() {
        Route::resource('/', 'AccountController');
    });
    //Action Function
    Route::resource('action', 'ActionController');
});

//send email with initial event
get('emails/events','EventEmailsController@index');