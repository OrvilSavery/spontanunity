@extends('layouts.master')

@section('body_class', 'home')

@section('content')

    <div class="banner">

        <div class="container">
            <div class="col-md-6 col-md-offset-3 homepage-banner-headline">
                @if(Session::get('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <h1>Live Free | Live Intentionally</h1>

                <p>Break up the familiar routine in your day. Discover and learn about spontaneous events so all you
                    have to do is have fun and live in the moment.</p>
                <a data-toggle="modal" data-target="#register" class="btn btn-primary btn-lg">Sign Up Now</a><br>
                <small>Already a user? <a data-toggle="modal" data-target="#login">login</a></small>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login">
        <div class="modal-dialog" role="document">
            <div class="col-md-12"></div>
            @include('partials.login')
            <a data-dismiss="modal" aria-label="Close"class="btn btn-sm btn-default">cancel</a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register">
        <div class="modal-dialog" role="document">
            <div class="col-md-12"></div>
            @include('partials.register')
            <a data-dismiss="modal" aria-label="Close"class="btn btn-sm btn-default">cancel</a>
        </div>
    </div>

@stop

@section('scripts')

@stop