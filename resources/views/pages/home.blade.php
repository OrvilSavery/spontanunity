@extends('layouts.master')

@section('heading')
    Live Free<br>
    Live Intentionally
@stop

@section('leadText')
    Discover and learn about spontaneous<br>
    events so all you have to do is have fun<br>
    and live in the moment.
@stop

@section('content')
    <div class="wrapper">
        <!-- print errors -->
        @foreach($errors->all() as $error)
            <p class="response error">{{$error}}</p>
        @endforeach
        <div class="clearfix"></div>
        <div class="tabs">
            <div class="tab-single sign-up active">
                <h4 class="pull-left tab-heading"><a>SIGN UP</a></h4>
                <div class="clearfix"></div>
                <div class="full-width form-container tab-content">
                    <div class="wrapper">
                        {!! Form::open(['url' => 'register']) !!}
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" placeholder="Email Address" class="form-style">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="email" placeholder="Password" class="form-style">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="email" placeholder="Confirm Password" class="form-style">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign Up">
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="tab-single log-in">
                <h4 class="pull-right tab-heading"><a>LOG IN</a></h4>
                <div class="clearfix"></div>
                <div class="full-width form-container tab-content">
                    <div class="wrapper">
                        {!! Form::open(['url' => 'login']) !!}
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" placeholder="Email Address" class="form-style">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-style">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Log In">
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@stop