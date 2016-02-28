@extends('layouts.admin')

@section('page-title', 'Events <br/><small></small>')

@section('content')
    <div class="col-md-12 text-right">
        <a href="{{ URL::current() == URL::to('admin/events/archives') ? URL::to('admin/events') : URL::to('admin/events/archives') }}" class="btn btn-default">{{ URL::current() == URL::to('admin/events/archives') ? 'View Active Events' : 'View Archives' }}</a>
        <a href="{{ URL::to('admin/events/create') }}" class="btn btn-primary">Create Event</a>
        <br><br>
    </div>
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
            <tr class="{{ URL::current() == URL::to('admin/events/archives') ? 'danger' : null }}">
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Level</th>
                <th class="actions">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr class="{{ eventMissingCrucialInformation($event->id) ? 'danger' : null }}">
                    <td>#{{ sprintf("%04d", $event->id) }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{!! \App\Category::find($event->type) ? \App\Category::find($event->type)->name : '<strong class="text-danger">No Category!</strong>' !!}</td>
                    <td>{!! strlen($event->description) > 0 ? substr($event->description, 0, 40).'&hellip;' : '<em class="text-danger">No Description</em>' !!}</td>
                    <td>{{ $event->level }}</td>
                    <td>
                        <a href="{{ URL::to('admin/events/'.$event->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
@stop

@section('scripts')

@stop