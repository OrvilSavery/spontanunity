@extends('layouts.master')

@section('content')
    @include('partials.banner')

    <div class="Container">
        <div class="Wrapper">
            <div class="Page">
                <div class="Page__header">
                    <h1>Welcome {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                        @if(\App\EventUser::where('user_id', Auth::user()->id)->where('chosen', 1)->first())
                            <small><a href="{{ URL::to('home') }}">See Chosen Actions</a></small>
                        @endif
                    </h1>

                </div>
                @include('partials.complete', ['events' => $events])
                <div class="clear"></div>
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
