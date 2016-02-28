@include('layouts.admin_partials.head')

<body>

<div id="wrapper">

    <!-- Navigation -->
    @include('layouts.admin_partials.navigation')
    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="page-header">
                {{--<img src="{{ URL::to('cp/img/tk-logo.png') }}" width="45" alt="" class="pull-right">--}}
                <h1>
                    @yield('page-title')
                </h1>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="row">
                    @yield('content')
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ URL::asset('cp/js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('cp/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('combine/base.js') }}"></script>
<script src="{{ URL::asset('cp/js/admin.js') }}"></script>
@yield('scripts')
</body>

</html>
