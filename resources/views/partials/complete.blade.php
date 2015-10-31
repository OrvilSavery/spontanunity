<ul class="Actions centered">
    @foreach($events as $event)
        @if(\App\EventUser::where('user_id', Auth::user()->id)->where('event_id', $event->id)->where('complete', 1)->first())
            <li class="Actions__listItem">
                <div class="Actions__actions"></div>
                <h1 class="Actions__listItemHeading">{{ $event->name }} <small>{{ 'Completed: '.date('F jS, Y', strtotime($event->updated_at)) }}</small></h1>
            </li>
        @endif
    @endforeach
</ul>