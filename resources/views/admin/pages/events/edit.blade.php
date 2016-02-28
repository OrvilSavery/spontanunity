@extends('layouts.admin')

@section('page-title', 'Edit Event <br/><small>'.$event->name.'</small>')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        @if(Session::get('success'))
        <div class="alert alert-success fade-away">
            {{ Session::get('success') }}
        </div>
        @endif
        {!! Form::open(['class' => 'event', 'route' => ['admin.events.update', $event->id]]) !!}
        {!! Form::hidden('_method', 'PUT') !!}
        <div class="panel panel-default {{ $event->archive == 1 ? 'panel-danger' : null }} {{ $event->draft == 1 ? 'panel-warning' : null }}">
            <div class="panel-heading {{ ($event->archive == 0) && ($event->draft == 0) ? 'hidden' : null }}">{{ $event->archive == 1 ? '(Currently Archived)' : null }} {{ $event->draft == 1 ? '(Currently In Draft Status)' : null }}</div>
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', $event->name, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::textarea('description', $event->description, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('type', 'Category') !!}
                    <select name="type" id="type" class="form-control">
                        <option value="0">Please Choose</option>
                        @foreach(\App\Category::orderby('name', 'asc')->get() as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $event->type ? 'selected' : null }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="panel-footer text-center">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                <span><a data-value="{{ $event->draft == 1 ? 0 : 1 }}" class="btn btn-default save-as-draft">Save As Draft</a>{!! Form::hidden('draft', $event->draft) !!}</span>
                <span><a data-value="{{ $event->archive == 1 ? 0 : 1 }}" class="btn btn-danger save-as-archived">Archive</a>{!! Form::hidden('archive', $event->archive) !!}</span>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        applyValueToInputOnClick('.active-category', 'btn-primary');
        applyValueToInputOnClick('.save-as-draft', 'active');
        applyValueToInputOnClick('.save-as-archived', 'active');
        submitFormOnChange('.save-as-draft', 'input[name="draft"]', 'form.event');
        submitFormOnChange('.save-as-archived', 'input[name="archive"]', 'form.event');
    </script>
@stop