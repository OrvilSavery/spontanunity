@include('layouts.partials.header')

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">
    <nav class="navigation">
        <div class="wrapper">
            <img src="{{ URL::asset('library/img/logo.png') }}" width="179" alt="">
        </div>
    </nav>

    @include('pages.partials.heading')

    <!-- Add your site or application content here -->
    @yield('content')
</div>

@include('layouts.partials.footer')
