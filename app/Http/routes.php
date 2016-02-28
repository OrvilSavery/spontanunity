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
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

get('/', 'PagesController@index');
get('home', 'PagesController@index');
Route::group(['prefix' => 'user'], function () {
    get('name-and-gender', 'PagesController@userSetNameAndGender');
    post('name-and-gender', 'UserController@updateNameAndGender');
    get('categories', 'PagesController@userCategories');
    post('categories', 'UserController@addFirstUserCategories');
});

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/', 'Admin\PagesController@index');
        Route::resource('users', 'Admin\UserController');
        Route::get('events/archives', 'Admin\EventController@archives');
        Route::resource('events', 'Admin\EventController');
        Route::get('categories/archives', 'Admin\CategoryController@archives');
        Route::resource('categories', 'Admin\CategoryController');
    });
});

//send email with initial event
get('emails/events', 'EventEmailsController@index');