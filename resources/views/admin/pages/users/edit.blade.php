@extends('layouts.admin')

@section('page-title', 'Edit User <br/><small>'.$user->first_name.' '.$user->last_name.'</small>')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        @if(Session::get('success'))
            <div class="alert alert-success fade-away">
                {{ Session::get('success') }}
            </div>
        @endif
        {!! Form::open(['class' => 'user', 'route' => ['admin.users.update', $user->id]]) !!}
        {!! Form::hidden('_method', 'PUT') !!}
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::label('first_name', 'First Name') !!}
                        {!! Form::text('first_name', $user->first_name, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-6 form-group">
                        {!! Form::label('last_name', 'Last Name') !!}
                        {!! Form::text('last_name', $user->last_name, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-12 form-group">
                        {!! Form::label('email', 'Email Address') !!}
                        {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-12 form-group">
                        {!! Form::label('gender', 'Gender') !!}
                        <div class="btn-group">
                            <a data-value="F" class="btn btn-default {{ $user->gender == 'F' ? 'btn-primary' : null }} gender">Female</a>
                            <a data-value="M" class="btn btn-default {{ $user->gender == 'M' ? 'btn-primary' : null }} gender">Male</a>
                            <a data-value="B" class="btn btn-default {{ $user->gender == 'B' ? 'btn-primary' : null }} gender">Both</a>
                            <a data-value="N" class="btn btn-default {{ $user->gender == 'N' ? 'btn-primary' : null }} gender">Neither</a>
                            {!! Form::hidden('gender', $user->gender) !!}
                        </div>
                    </div>
                    <div class="col-md-6 form-group">
                        {!! Form::label('admin', 'Is User An Admin?') !!}
                        <div class="btn-group">
                            <a data-value="1" class="btn btn-default {{ $user->admin == 1 ? 'btn-primary' : null }} admin">Yes</a>
                            <a data-value="0" class="btn btn-default {{ $user->admin == 0 ? 'btn-primary' : null }} admin">No</a>
                            {!! Form::hidden('admin', $user->admin) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        applyValueToInputOnClick('.gender', 'btn-primary');
        applyValueToInputOnClick('.admin', 'btn-primary');
    </script>
@stop