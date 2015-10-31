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
    if (Auth::check()) {
        return redirect('home');
    }
    return view('index');
});

Route::group(['before' => 'auth'], function () {
    //Logged in Homepage
    Route::get('home', function () {
        return view('home');
    });

    //Actions Functionality
    Route::group(['prefix' => 'actions'], function () {
        get('/', 'ActionsController@index');
        post('choose/{id}', ['as' => 'actions.choose', 'uses' => 'ActionsController@choose']);
        post('dismiss/{id}', ['as' => 'actions.dismiss', 'uses' => 'ActionsController@dismiss']);
        post('complete/{id}', ['as' => 'actions.complete', 'uses' => 'ActionsController@complete']);
    });
});


//send email with initial event
Route::get('emails/events','EmailsController@sendEvents');