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
        @yield('scripts')
    </body>
</html>