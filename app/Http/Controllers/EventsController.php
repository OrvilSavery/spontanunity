<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * @var Event
     */
    private $event;
    /**
     * @var EventType
     */
    private $eventType;

    /**
     * EventsController constructor.
     */
    public function __construct(Event $event, EventType $eventType)
    {
        $this->event = $event;
        $this->eventType = $eventType;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Get All Events
        $events = $this->event->orderby('created_at', 'desc')->get();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $eventTypes = $this->eventType->all();
        return view('admin.events.create', compact('eventTypes'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * Store New Event
     */
    public function store(Request $request)
    {
        $missingMessage = 'Please fill out the form completely';
        if(strlen($request['name']) < 1) {
            return redirect()->back()->with('error', $missingMessage);
        } elseif(strlen($request['type']) < 1) {
            return redirect()->back()->with('error', $missingMessage);
        } elseif(strlen($request['description']) < 1) {
            return redirect()->back()->with('error', $missingMessage);
        } elseif(strlen($request['level']) < 1) {
            return redirect()->back()->with('error', $missingMessage);
        }

        $event = new Event;
        $event->name = $request['name'];
        $event->type = $request['type'];
        $event->description = $request['description'];
        $event->level = $request['level'];
        $event->save();

        //Update Events Type Table
        if(!EventType::where('name', $event->type)->first()) {
            $eventType = new EventType;
            $eventType->name = $request['type'];
            $eventType->save();
        }

        return redirect('admin/events/'.$event->id)->with('success', 'Event Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $event = $this->event->find($id);
        $eventTypes = $this->eventType->all();
        return view('admin.events.edit', compact('event', 'eventTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $event = $this->event->find($id);

        $event->name = $request['name'];
        $event->type = $request['type'];
        $event->description = $request['description'];
        $event->level = $request['level'];
        $event->save();

        //Update Events Type Table
        if(!EventType::where('name', $event->type)->first()) {
            $eventType = new EventType;
            $eventType->name = $request['type'];
            $eventType->save();
        }

        return redirect()->back()->with('success', 'Event Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $event = $this->event->find($id);
        $event->delete();

        return redirect()->back()->with('deleted', 'event Deleted');
    }
}
