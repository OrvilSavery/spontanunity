@extends('layouts.master')

@section('content')

    <div class="col-md-12 text-center logo-block">
        <img src="{{ URL::asset('library/img/logo.png') }}" alt="Spontanunity | BETA">
    </div>
    <div class="col-md-6 col-md-offset-3 text-center headline">
        <br/>

        <h1 class="">Live Free | Live Intentionally</h1>

        <p class="lead">
            Break up the familiar routine in your day. Discover and learn about spontaneous events so all you have to do is have fun and live in the moment.
        </p>
        <div class="clearfix"></div>
        <div class="search-bar col-md-12">

                <div class="col-md-12">
                    <div class="alert alert-success">
                        <strong>Thank you for your interest, we will send you an update as soon as the beta app launch begins!</strong>
                    </div>
                </div>

            <div class="clearfix"></div>
            <br/><br/>
        </div>
    </div>

@stop

@section('scripts')

@stop