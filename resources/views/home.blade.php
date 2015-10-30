@extends('layouts.master')

@section('content')
    @include('partials.banner')

    <div class="container">
        @include('partials.actions', ['actions' => ["Get Juggle With It ", "Let's Reconnect", "Tarzan Ain't Got Nothing On Me", "Time To Freeze"]])
    </div>

@stop

@section('scripts')
@stop