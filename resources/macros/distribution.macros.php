<?php

function createNewEventTypeFromRecord() {

    $events = \App\Event::all();
    foreach($events as $event) {
        if(!\App\EventType::where('name', $event->type)->first()) {
            $type = new \App\EventType();
            $type->name = $event->type;
            $type->save();
        }
        return "Event Type Table Updated";
    }

}