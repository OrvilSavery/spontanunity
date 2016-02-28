@extends('layouts.admin')

@section('page-title', 'Create Event <br/>')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        @if(Session::get('success'))
            <div class="alert alert-success fade-away">
                {{ Session::get('success') }}
            </div>
        @endif
        {!! Form::open(['class' => 'event', 'route' => 'admin.events.store']) !!}
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
                    {!! Form::label('type', 'Category') !!}
                    <select name="type" id="type" class="form-control">
                        <option value="0">Please Choose</option>
                        @foreach(\App\Category::orderby('name', 'asc')->get() as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
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
        submitFormOnChange('.save-as-draft', 'input[name="draft"]', 'form.event');
        submitFormOnChange('.save-as-archived', 'input[name="archive"]', 'form.event');
    </script>
@stop