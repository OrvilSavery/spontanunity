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
                <form action="http://spontanuity.createsend.com/t/i/s/irdujr/" method="post" id="subForm">
                    <div class="col-md-8 col-sm-8 col-xs-12 form-group text-left">
                        <label for="fieldEmail">Email</label><br />
                        <input id="fieldEmail" name="cm-irdujr-irdujr" type="email" class="form-control" placeholder="Sign up to be a beta tester" required />
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <label for="">&nbsp;</label><br/>
                        <button type="submit" class="btn btn-primary col-md-12 col-sm-12 col-xs-10 col-xs-offset-1">Sign Up</button>
                    </div>
                    <div class="col-md-12 text-center">
                        <small>spam free since forever</small>
                    </div>
                </form>
            <div class="clearfix"></div>
            <br/><br/>
        </div>
    </div>

@stop

@section('scripts')

@stop