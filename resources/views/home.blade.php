@extends('layouts.master')

@section('content')
    @include('partials.banner')

    <div class="Container">
        <div class="Wrapper">
            <div class="Page">
                <div class="Page__header">
                    <h1>Welcome {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h1>
                </div>
                <a href="{{ URL::to('actions') }}">Choose Actions</a>
            </div>
        </div>
    </div>

@stop

@section('scripts')
@stop