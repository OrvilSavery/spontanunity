@extends('layouts.admin')

@section('page-title', 'Create Category <br/><small></small>')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['class' => 'category', 'route' => 'admin.categories.store']) !!}
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('active', 'Is This Category Active?') !!}
                    <div class="btn-group">
                        <a data-value="1" class="active-category btn btn-default btn-primary">Yes</a>
                        <a data-value="0" class="active-category btn btn-default">No</a>
                        {!! Form::hidden('active', 1) !!}
                    </div>

                </div>
            </div>
            <div class="panel-footer text-center">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                <span><a data-value="1" class="btn btn-default save-as-draft">Save As Draft</a>{!! Form::hidden('draft', 0) !!}</span>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        applyValueToInputOnClick('.active-category', 'btn-primary');
        applyValueToInputOnClick('.save-as-draft', 'active');
        applyValueToInputOnClick('.save-as-archived', 'active');
        submitFormOnChange('.save-as-draft', 'input[name="draft"]', 'form.category');
    </script>
@stop