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

//Homepage
Route::get('/', 'PagesController@index');
//Confirmation Page
Route::get('thank-you', 'PagesController@confirm');

//Admin Section
Route::group(['prefix' => 'admin'], function(){
    //Events
    Route::resource('events', 'EventsController');
});

//Send Email Address
Route::get('emails/index', 'EmailsController@index');
