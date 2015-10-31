<ul class="Actions centered">
    @foreach($actions as $action)
        <li class="Actions__listItem">
            <div class="Actions__actions">
                <a href="" class="ButtonSM__choose">Choose</a>
                <a href="" class="ButtonSM__complete hidden">Complete</a>
                <a href="" class="ButtonSM__dismiss">Dismiss</a>
            </div>
            <h1 class="Actions__listItemHeading">{{ $action }}</h1>
        </li>
    @endforeach
</ul>