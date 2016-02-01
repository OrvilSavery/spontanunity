@extends('layouts.master')

@section('heading')
    Welcome, <br>
    {{ Auth::user()->first_name.' '.Auth::user()->last_name }}
@stop

@section('leadText')
    Let's Get Spontaneous!
@stop

@section('content')
    <div class="wrapper">
        <div class="page page-dashboard">
            <div class="wrapper">
                <div class="one-for-the-road {{ $oneForTheRoad[0]['class'] }}">
                    <h2 class="text-center">One For The Road?</h2>

                    <div class="road-checkmark">
                        <div class="task-container">
                            <div class="task">
                                <span>{{ $oneForTheRoad[0]['name'] }}</span>
                                <a data-toggle="overlay" data-overlay="event-help"
                                   data-help-title="{{ $oneForTheRoad[0]['name'] }}"
                                   data-help-description="{{ $oneForTheRoad[0]['description'] }}"
                                   data-face="{{ URL::asset('library/img/face-generic.png') }}" class="help">Help</a>
                            </div>
                            {!! Form::open(['class'  => 'complete-task']) !!}
                            <a class="checkmark">Complete One For The Road</a>
                            {!! Form::close() !!}
                        </div>
                        <div class="task-none">
                            <h1>None For Today!</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="sub-section">
                <h2 class="text-center">Categories</h2>
                <ul class="category-list">
                    @foreach($chosenCategories as $chosen)
                        <li><a data-toggle="overlay" data-overlay="event-help"
                               data-help-title="{{ $category->find($chosen->category_id)->name }}"
                               data-help-description="{{ $category->find($chosen->category_id)->description }}"
                               data-face="{{ URL::asset('library/img/face-category.png') }}">{{ $category->find($chosen->category_id)->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


@stop

@section('scripts')

@stop