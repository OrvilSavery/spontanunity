<ul class="Actions centered">
    @foreach($events as $event)
        @if(\App\EventUser::where('user_id', Auth::user()->id)->where('event_id', $event->id)->where('chosen', 1)->where('complete', null)->first())
        <li class="Actions__listItem">
            <div class="Actions__actions">

                <a data-url="{{ URL::route('actions.complete', $event->id) }}" class="ButtonSM__complete">Complete</a>

                <a data-url="{{ URL::route('actions.dismiss', $event->id) }}" class="ButtonSM__dismiss">Dismiss</a>
            </div>
            <h1 class="Actions__listItemHeading">{{ $event->name }}</h1>
        </li>
        @endif
    @endforeach
</ul>