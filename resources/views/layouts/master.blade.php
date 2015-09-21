<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.header')
    <body>
        @include('layouts.partials.navigation')

        <div class="wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>

        @include('layouts.partials.footer')
        <script src="{{ URL::asset('library/js/jquery-1.11.3.min.js') }}"></script>

        @yield('scripts')
    </body>
</html>