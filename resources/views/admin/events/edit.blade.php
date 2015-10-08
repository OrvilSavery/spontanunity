@extends('layouts.admin.master')

@section('side-navigation')
    @include('admin.events.partials.navigation')
@stop

@section('content')

    @if(Session::get('success'))
    <div class="col-md-12 fade-alert">
        <div class="alert alert-success">
            <strong>{{ Session::get('success') }}</strong>
        </div>
    </div>
    @endif
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Edit {{ $event->name }}</div>
            <form action="{{ URL::route('admin.events.update', $event->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="panel-body">
                    <div class="form-group col-md-4">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ $event->name }}" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="type">Type</label>
                        <input type="text" name="type" id="type" value="{{ $event->type }}" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="level">Level</label>
                        <input type="text" id="level" name="level" value="{{ $event->level }}" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10"
                                  class="form-control">{{ $event->description }}</textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Update Event">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">Already Used Event Types</div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach($eventTypes as $eventType)
                        <a class="list-group-item" data-type="{{ $eventType->name }}">{{ $eventType->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('a.list-group-item').click(function () {
                var dataType = $(this).data('type');
                $('input[name="type"]').attr('value', dataType);
            });
        });
    </script>
@stop