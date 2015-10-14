<?php

namespace App\Http\Controllers;

use App\Event;
use Mail;
use Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class EventEmailsController extends Controller
{
    /**
     * @var Subscriber
     */
    private $subscriber;

    /**
     * @var event
     */
    private $event;

    /**
     * EventEmailsController constructor.
     */
    public function __construct(Event $event,Subscriber $subscriber)
    {
        $this->event = $event;
        $this->subscriber = $subscriber;
    }


    /**
     * Initial Email Message
     */
    public function index()
    {
        $randomEvents = $this->getRandomEvents(4)
        return view('emails.event');
    }

    /**
    *  Secondary email with initial events to send to user
    */
    public function getRandomEvents(int $limit){
        $randomEvents = $this->event->take($limit);
        return $randomEvents;
    }

    /**
     * Store events sent to user
     */
    public function store()
    {
       /* $input = Request::all();

        if(!$input['email']) {
            return redirect()->back()->with(Session::flash('error', 'Please enter a valid email address'));
        }

        if ($this->subscriber->where('email', $input['email'])->first())
        {
            return redirect()->back()->with(Session::flash('success', 'You have already submitted your email address. Thank you for your interest, we will send you an update as soon as the beta app launch begins!'));
        }*/

        $event_log = new EventLog;
        $event_log->user_id = $this->subscriber->id;
        $event_log->event_id = $this->event->id;
        $event_log->save();

        return redirect()->back()->with(Session::flash('success', 'Thank you! Thank you for your interest, we will send you an update as soon as the beta app launch begins!'));

    }

    /**
    *  Retrieve Events from the database
    */
    public function retrieveEvents(){

    }

}
