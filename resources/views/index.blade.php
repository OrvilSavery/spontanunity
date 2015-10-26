@extends('layouts.master')

@section('body_class', 'home')

@section('content')

    <div class="Banner">

        <div class="container">
            <div class="Banner__headline">
                <h1>Live Free | Live Intentionally</h1>

                <p>Break up the familiar routine in your day. Discover and learn about spontaneous events so all you
                    have to do is have fun and live in the moment.</p>
            </div>
            @include('partials.login')
        </div>

    </div>

@stop

@section('scripts')

@stop