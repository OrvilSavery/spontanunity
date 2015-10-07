<?php

namespace App\Http\Controllers;

use App\Event;
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
     * EventsController constructor.
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Get All Events
        $events = $this->event->orderby('create_date', 'desc')->get();
        return view('admin.events.index', compact('events'));
        //return $events;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Responsi
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
        //return view('admin.events.edit', compact('event'));
        return $event;
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

        return redirect()->back()->with('success', 'Event Updated');
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
