@extends('layouts.admin')

@section('page-title', 'Users <br/><small>Add, Edit and Delete Users in the System</small>')

@section('content')
<div class="col-md-12">
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
                    <td>{{ sprintf("%04d", $user->id) }}</td>
                    <td>{{ $user->first_name.' '.$user->last_name }} {!! $user->admin == 1 ? '<span class="label label-info">ADMIN</span>' : null !!}</td>
                    <td>{{ $user->email }}</td>
                    <td class="actions">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('scripts')

@stop