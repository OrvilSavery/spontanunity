@include('layouts.partials.header')

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">
    <nav class="navigation">
        <div class="wrapper">
            <img src="{{ URL::asset('library/img/logo.png') }}" width="179" alt="">
            @if(Auth::check())
                <a class="nav-dropdown"><img src="{{ URL::asset('library/img/ico-profile.png') }}" width="29" alt=""></a>
            @endif
        </div>
    </nav>

    @include('pages.partials.heading')

            <!-- Add your site or application content here -->
    @yield('content')
</div>

<div class="overlay-modal generic">
    <div class="modal-wrapper">
        <div class="modal-container">
            <a class="close"><img src="{{ URL::asset('library/img/btn-close.png') }}" width="30" alt=""></a>
            <img src="{{ URL::asset('library/img/face-happy.png') }}" class="face" alt="">
            <h1>Overlay Title</h1>
            <p>Overlay Description</p>
        </div>
    </div>
</div>

<div class="overlay-modal navigation">
    <div class="modal-wrapper">
        <div class="modal-container">
            <a class="close"><img src="{{ URL::asset('library/img/btn-close.png') }}" width="30" alt=""></a>
            <ul class="navigation">
                <li><a href="{{ URL::to('logout') }}">Log Out</a></li>
                @if(Auth::check() && Auth::user()->admin == 1)
                    <li><a href="{{ URL::to('admin') }}">Admin</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>

@include('layouts.partials.footer')

