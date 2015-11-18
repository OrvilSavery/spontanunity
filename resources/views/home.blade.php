@extends('layouts.master')

@section('content')
    @include('partials.banner', ['user' => Auth::user()->first_name . ' ' . Auth::user()->last_name, 'message' => 'Welcome To Spontanuity!'])

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default page-panel">
            <div class="panel-body">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="well"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>




@stop

@section('scripts')

@stop
