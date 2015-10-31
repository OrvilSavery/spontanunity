<ul class="Actions centered">
    @foreach($events as $event)
        @if(!\App\EventUser::where('user_id', Auth::user()->id)->where('event_id', $event->id)->first())
        <span style="display:none">{{ $iterator++ }}</span>
        @if($iterator <= 4)
        <li class="Actions__listItem">
            <div class="Actions__actions">
                <a href="{{ URL::route('actions.choose', $event->id) }}" class="ButtonSM__choose">Choose</a>
                <a data-url="{{ URL::route('actions.dismiss', $event->id) }}" class="ButtonSM__dismiss">Dismiss</a>
            </div>
            <h1 class="Actions__listItemHeading">{{ $event->name }}</h1>
        </li>
        @endif
        @endif
    @endforeach
</ul>