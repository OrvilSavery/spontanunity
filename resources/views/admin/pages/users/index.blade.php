@extends('layouts.admin')

@section('page-title', 'Users <br/><small>Add, Edit and Delete Users in the System</small>')

@section('content')
<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th class="actions">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td><strong>#{{ sprintf("%04d", $user->id) }}</strong></td>
                    <td>{{ $user->first_name.' '.$user->last_name }} {!! $user->admin == 1 ? '<span class="label label-info">ADMIN</span>' : null !!}</td>
                    <td>{{ $user->email }}</td>
                    <td class="actions">
                        <a href="{{ URL::to('admin/users/'.$user->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('scripts')

@stop