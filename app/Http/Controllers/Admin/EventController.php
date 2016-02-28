<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class EventController extends Controller {
    /**
     * @var Event
     */
    private $event;

    /**
     * EventController constructor.
     * @param Event $event
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function index()
    {
        $events = $this->event->orderby('name', 'asc')->where('archive', 0)->get();
        return view('admin.pages.events.index', compact('events'));
    }

    public function archives()
    {
        $events = $this->event->orderby('name', 'asc')->where('archive', 1)->get();
        return view('admin.pages.events.index', compact('events'));
    }

    public function edit($id)
    {
        $event = $this->event->find($id);
        return view('admin.pages.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $this->event->find($id)->update($request->all());
        return back()->with('success', 'Event Updated!');
    }

    public function create()
    {
        return view('admin.pages.events.create');
    }

    public function store(Request $request)
    {
        $event = $this->event->create($request->all());
        return redirect('admin/events/'.$event->id.'/edit')->with('success', 'Event Created!');
    }
}