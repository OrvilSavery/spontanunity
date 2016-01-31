@extends('layouts.master')

@section('heading')
    Welcome, <br>
    {{ Auth::user()->first_name.' '.Auth::user()->last_name }}
@stop

@section('leadText')
    Let's Get Spontaneous!
@stop

@section('content')
    <div class="wrapper">
        <div class="page">
            @if(\App\CategoryAccount::where('user_id', Auth::user()->id)->orderByRaw('RAND()')->first())
            <div class="wrapper">
                <h2 class="text-center">One For The Road?</h2>
                <div class="road-checkmark">
                    <div class="task">
                        <span>{{ \App\Event::where('type', \App\CategoryAccount::where('user_id', Auth::user()->id)->orderByRaw('RAND()')->first()->category_id)->orderByRaw('RAND()')->first()->name }}</span>
                        <a href="#" class="help">Help</a>
                    </div>
                    <a href="#" class="checkmark">Complete One For The Road</a>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            <div class="clearfix"></div>
            <div class="sub-section">
                <h2 class="text-center">Categories</h2>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@stop