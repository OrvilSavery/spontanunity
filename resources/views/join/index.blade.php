@extends('layouts.master')

@section('content')
    @include('partials.banner', ['user' => Auth::user()->first_name . ' ' . Auth::user()->last_name, 'message' => 'Welcome To Spontanuity!'])

    <div class="col-md-8 col-md-offset-2">
        @include('join.partials.application')
    </div>




@stop

@section('scripts')

@stop
