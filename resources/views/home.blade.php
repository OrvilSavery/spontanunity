@extends('layouts.master')

@section('content')
    @include('partials.banner')

    <div class="Container">
        <div class="Wrapper">
            <div class="Page">
                <div class="Page__header">
                    <h1>Welcome {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                        @if(\App\EventUser::where('user_id', Auth::user()->id)->where('complete', 1)->first())
                        <small><a href="{{ URL::to('actions/completed') }}">See Completed Actions</a></small>
                        @endif
                    </h1>
                </div>
                @include('partials.chosen', ['events' => $events])
                <a href="{{ URL::to('actions') }}">Choose Actions</a>
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
        $(document).ready(function () {
            $('a.ButtonSM__complete').click(function () {
                var completeModal = $('div.Modal#completeAction');
                var url = $(this).data('url');
                var form = completeModal.find('form');
                form.attr('action', url);
                completeModal.css('display', 'flex');
            });
            $('div.Modal#completeAction a.cancel').click(function(){
                $('div.Modal#completeAction').fadeOut(200);
            });
        });
    </script>
@stop