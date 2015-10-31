@extends('layouts.master')

@section('content')
    @include('partials.banner')

    <div class="Container">
        <div class="Wrapper">
            <div class="Page">
                <div class="Page__header">
                    <h1>Welcome {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h1>
                </div>
                @include('partials.actions', ['events' => $events])
            </div>
        </div>
    </div>

    <div class="Modal" id="dismissAction">
        <div class="Modal__overlay">
            <div class="Container">
                <div class="Modal__content">
                    <div class="Modal__heading">Don't Like This Action?</div>
                    <div class="Modal__body">
                        <p>To help us show you better actions in the future, do you mind telling why you don't like this
                            event?</p>
                        {!! Form::open() !!}
                        <select name="reason" id="reason">
                            <option value="I'm not interested in it">I'm not interested in it</option>
                            <option value="I don't want to do it now">I don't want to do it now</option>
                            <option value="No reason">No reason</option>
                        </select>
                    </div>
                    <div class="Modal__footer">
                        <a class="cancel">I've changed my mind</a>
                        {!! Form::submit('Dismiss Action') !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('a.ButtonSM__dismiss').click(function () {
                var dismissModal = $('div.Modal#dismissAction');
                var url = $(this).data('url');
                var form = dismissModal.find('form');
                form.attr('action', url);
                dismissModal.css('display', 'flex');
            });
            $('div.Modal#dismissAction a.cancel').click(function(){
                $('div.Modal#dismissAction').fadeOut(200);
            });
        });
    </script>
@stop
