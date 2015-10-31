<header class="Navigation">
    <div class="Container">
        <a href="" class="Navigation__brand"><img src="{{ URL::asset('library/img/logo.png') }}" alt=""></a>
        <nav class="Navigation__links">
            {{--<ul>--}}
                {{--<li><a href="#">Link a</a></li>--}}
                {{--<li><a href="#">Link b</a></li>--}}
                {{--<li><a href="#">link c</a></li>--}}
            {{--</ul>--}}
        </nav>
        <div class="Navigation__account">
            @if(Auth::check())
                {{--<a href="">Account</a>--}}
                <a href="{{ URL::to('auth/logout') }}">Logout</a>
            @endif
        </div>
    </div>
</header>