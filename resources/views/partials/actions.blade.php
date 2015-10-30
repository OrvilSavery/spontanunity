<ul class="Actions">
    @foreach($actions as $action)
        <li class="Actions__listItem">
            <h1 class="Actions__listItemHeading">{{ $action }}</h1>
            <div class="Actions__actions">
                <a href="" class="choose"><span class="icon">x</span><span class="text">Choose</span></a>
                <a href="" class="complete"><span class="icon">x</span><span class="text">Complete</span></a>
                <a href="" class="dismiss"><span class="icon">x</span><span class="text">Dismiss</span></a>
            </div>
        </li>
    @endforeach
</ul>