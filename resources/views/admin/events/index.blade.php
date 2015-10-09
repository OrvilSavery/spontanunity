@extends('layouts.admin.master')

@section('side-navigation')
    @include('admin.events.partials.navigation')
@stop

@section('content')


    <div class="clearfix"></div>
    <div class="col-md-12">
        <h1 class="page-header">Events</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-condensed">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Level</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td class="truncate">{{ substr($event->description, 0, 50).'...' }}</td>
                        <td>{{ $event->type }}</td>
                        <td>{{ $event->level }}</td>
                        <td>{{ date('m/d/y', strtotime($event->created_at)) }}</td>
                        <td>
                            <nobr>
                            <a href="{{ URL::asset('admin/events/'.$event->id.'/edit') }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-toggle="modal" data-target="#deleteEvent" data-url="{{ URL::route('admin.events.destroy', $event->id) }}" class="btn btn-danger delete-event"><i class="glyphicon glyphicon-trash"></i></a>
                            </nobr>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix"></div>

    <!-- Modal -->
    <div class="modal fade" id="deleteEvent" tabindex="-1" role="dialog" aria-labelledby="deleteEvent">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Event</h4>
                </div>
                <div class="modal-body">
                    This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <form action="" class="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-danger" value="Delete Event">
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('a.delete-event').click(function() {
                $('#deleteEvent form').attr('action', $(this).data('url'));
            });
        });
    </script>
@stop