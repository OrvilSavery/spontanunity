<?php

function isActive($url, $activeClass = 'active') {
    return URL::current() == URL::to($url) ? $activeClass : false;
}

function categoryMissingCrucialInformation($id) {
    $category = \App\Category::find($id);
    if($category->description > 0) {
        return false;
    }
    if(\App\Event::where('type', $category->id)->count() > 0) {
        return false;
    }
    return true;
}

function eventMissingCrucialInformation($id) {
    $event = \App\Event::find($id);
    if(\App\Category::find($event->type)) {
        return false;
    }
    if(strlen($event->description) < 1) {
        return false;
    }
    return true;
}