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
Route::get('events/list', 'EventsController@listEvents');
//Admin Section
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    //Admin Index
    Route::get('/', function(){ return redirect('admin/events'); });
    //Events
    Route::resource('events', 'EventsController');
});

//Send Email Address
Route::get('emails/index', 'EmailsController@index');


/**
 * SPECIAL FUNCTIONS
 */
//Update Event Type Table
Route::get('update-event-table', function(){
    $events = \App\Event::all();
    foreach($events as $event) {
        if(! \App\EventType::where('name', $event->type)->first()) {
            $type = new \App\EventType();
            $type->name = $event->type;
            $type->save();
        }
    }
        return "Event Type Table Updated";
});

//send email with initial event
Route::get('emails/events','EventEmailsController@index');