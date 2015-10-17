<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.header')
    <body>
        @include('layouts.partials.navigation')


                @yield('content')


        @include('layouts.partials.footer')
        <script src="{{ URL::asset('library/js/jquery-1.11.3.min.js') }}"></script>

        @yield('scripts')
    </body>
</html>