@extends('layouts.master')

@section('content')
    @include('partials.banner')

    <div class="Container">
        <div class="Wrapper">
            <div class="Page">
                <div class="Page__header">
                    <h1>Welcome {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h1>
                </div>
                @include('partials.actions', ['events' => $events])
            </div>
        </div>
    </div>

    <div class="Modal">
        <div class="Modal__overlay">
           <div class="Container">
               <div class="Modal__content">
                   <div class="Modal__heading">Don't Like This Action?</div>
                   <div class="Modal__body">
                       <p>To help us show you better actions in the future, do you mind telling why you don't like this event?</p>
                       {!! Form::open() !!}
                       <select name="" id="">
                           <option value="">I'm not interested in it</option>
                           <option value="">I don't want to do it now</option>
                           <option value="">No reason</option>
                       </select>
                   </div>
                   <div class="Modal__footer">
                       <a href="" class="cancel">I've changed my mind</a>
                       {!! Form::submit('Dismiss Action') !!}
                   </div>

                   {!! Form::close() !!}
               </div>
           </div>
        </div>
    </div>

@stop
