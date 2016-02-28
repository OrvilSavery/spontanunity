@extends('layouts.admin')

@section('page-title', 'Categories <br/><small></small>')

@section('content')
    <div class="col-md-12 text-right">
        <a href="{{ URL::current() == URL::to('admin/categories/archives') ? URL::to('admin/categories') : URL::to('admin/categories/archives') }}" class="btn btn-default">{{ URL::current() == URL::to('admin/categories/archives') ? 'View Active Categories' : 'View Archives' }}</a>
        <a href="{{ URL::to('admin/categories/create') }}" class="btn btn-primary">Create Category</a>
        <br><br>
    </div>
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
            <tr class="{{ URL::current() == URL::to('admin/categories/archives') ? 'danger' : null }}">
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th># of Events</th>
                <th class="actions">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr class="{{ $category->draft == 1 ? 'warning text-warning' : null }} {{ categoryMissingCrucialInformation($category->id) ? 'danger' : null }}">
                    <td><strong>#{{ sprintf("%04d", $category->id) }}</strong></td>
                    <td>{{ $category->name }}</td>
                    <td>{!! strlen($category->description) > 0 ? substr($category->description, 0, 75).'&hellip;' : '<em class="text-danger">No Description</em>' !!}</td>
                    <td>{!! $category->active == 1 ? '<span class="label label-success">active</span>' : '<span class="label label-danger">inactive</span>' !!}</td>
                    <td>
                        {!! \App\Event::where('type', $category->id)->count() > 0 ? \App\Event::where('type', $category->id)->count() : '<strong class="text-danger">'.\App\Event::where('type', $category->id)->count().'</strong>' !!}
                    </td>
                    <td>
                        <a href="{{ URL::to('admin/categories/'.$category->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i></a>
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