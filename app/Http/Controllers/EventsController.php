<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Mail;
use Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * @var Subscriber
     */
    private $subscriber;

    /**
     * EmailsController constructor.
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }


    public function getEvents(){
        $results = DB::select('select * from spontanunity.events limit 4');
        return $results;

    }

    public function sendEmail(){

        Mail::send('folder.view', $data, function($message) {
            $message->to($subscriber->email, $subscriber->name)->subject('Here are your first four events!');
        });
    }

    public function takeAction(){
        //Need a way to write event actions to the database
    }

}
