<?php

namespace App\Http\Controllers;

use App\Dismissed;
use App\Event;
use App\EventUser;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class ActionsController extends Controller
{
    /**
     * @var Event
     */
    private $event;
    /**
     * @var User
     */
    private $user;
    /**
     * @var Dismissed
     */
    private $dismissed;
    /**
     * @var EventUser
     */
    private $eventUser;


    /**
     * ActionsController constructor.
     * @param Event $event
     * @param User $user
     * @param Dismissed $dismissed
     * @param EventUser $eventUser
     */
    public function __construct(Event $event, User $user, Dismissed $dismissed, EventUser $eventUser)
    {
        $this->event = $event;
        $this->user = $user;
        $this->dismissed = $dismissed;
        $this->eventUser = $eventUser;
    }

    public function index()
    {
        $events = $this->event->where('name', '!=', '')->where('type', '!=', '')->orderByRaw("RAND()")->get();
        $iterator = 0;
        return view('actions.index', compact('events', 'iterator'));
    }
    
    public function choose(Request $request, $id)
    {
        $event = $this->event->find($id);
        $action = new EventUser;
        if(EventUser::where('event_id', $event->id)->where('user_id', Auth::user()->id)->first()) {
            $action = EventUser::where('event_id', $event->id)->where('user_id', Auth::user()->id)->first();
        }
        $action->user_id = Auth::user()->id;
        $action->event_id = $event->id;
        $action->chosen = 1;
        $action->save();
        return back()->with('success', 'Action Chosed!');
    }

    public function dismiss(Request $request, $id)
    {
        $event = $this->event->find($id);
        $action = new EventUser;
        if(EventUser::where('event_id', $event->id)->where('user_id', Auth::user()->id)->first()) {
            $action = EventUser::where('event_id', $event->id)->where('user_id', Auth::user()->id)->first();
        }
        $action->user_id = Auth::user()->id;
        $action->event_id = $event->id;
        $action->dismissed = 1;
        $action->save();

        $dismissal = new Dismissed;
        $dismissal->event_id = $event->id;
        $dismissal->user_id = Auth::user()->id;
        $dismissal->reason = $request['reason'];
        $dismissal->save();
        return back()->with('success', 'Action Dismissed!');
    }

    public function complete($id)
    {
        $event = $this->event->find($id);
        $action = new EventUser;
        if(EventUser::where('event_id', $event->id)->where('user_id', Auth::user()->id)->first()) {
            $action = EventUser::where('event_id', $event->id)->where('user_id', Auth::user()->id)->first();
        }
        $action->user_id = Auth::user()->id;
        $action->event_id = $event->id;
        $action->complete = 1;
        $action->save();
        return back()->with('success', 'Action Completed!');
    }

    public function checkExistingAction($event_id, $user_id)
    {
        $action = new EventUser;
        if(EventUser::where('event_id', $event_id)->where('user_id', $user_id)->first()) {
            $action = EventUser::where('event_id', $event_id)->where('user_id', $user_id)->first();
        }
        return $action;
    }

    public function createActionList()
    {

    }
}
