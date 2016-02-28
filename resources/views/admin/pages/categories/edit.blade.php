@extends('layouts.admin')

@section('page-title', 'Edit Category <br/><small>'.$category->name.'</small>')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        @if(Session::get('success'))
        <div class="alert alert-success fade-away">
            {{ Session::get('success') }}
        </div>
        @endif
        {!! Form::open(['class' => 'category', 'route' => ['admin.categories.update', $category->id]]) !!}
        {!! Form::hidden('_method', 'PUT') !!}
        <div class="panel panel-default {{ $category->archive == 1 ? 'panel-danger' : null }} {{ $category->draft == 1 ? 'panel-warning' : null }}">
            <div class="panel-heading {{ ($category->archive == 0) && ($category->draft == 0) ? 'hidden' : null }}">{{ $category->archive == 1 ? '(Currently Archived)' : null }} {{ $category->draft == 1 ? '(Currently In Draft Status)' : null }}</div>
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::textarea('description', $category->description, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('active', 'Is This Category Active?') !!}
                    <div class="btn-group">
                        <a data-value="1" class="active-category btn btn-default {{ $category->active == 1 ? 'btn-primary' : null }}">Yes</a>
                        <a data-value="0" class="active-category btn btn-default {{ $category->active == 0 ? 'btn-primary' : null }}">No</a>
                        {!! Form::hidden('active', $category->active) !!}
                    </div>

                </div>
            </div>
            <div class="panel-footer text-center">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                <span><a data-value="{{ $category->draft == 1 ? 0 : 1 }}" class="btn btn-default save-as-draft">Save As Draft</a>{!! Form::hidden('draft', $category->draft) !!}</span>
                <span><a data-value="{{ $category->archive == 1 ? 0 : 1 }}" class="btn btn-danger save-as-archived">Archive</a>{!! Form::hidden('archive', $category->archive) !!}</span>
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
        submitFormOnChange('.save-as-archived', 'input[name="archive"]', 'form.category');
    </script>
@stop