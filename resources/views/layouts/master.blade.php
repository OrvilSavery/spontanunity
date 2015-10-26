
@include('layouts.partials.header')

<body class="@yield('body_class')">

    <div class="wrapper">
        @include('layouts.partials.navigation')
        @yield('content')
    </div>

    <!--The Scripts-->
    <script src="{{ URL::asset('library/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('library/bower_components/vue/dist/vue.min.js') }}"></script>
    @yield('scripts')

</body>
</html>