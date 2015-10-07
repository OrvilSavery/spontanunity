<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Off Canvas Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('admin/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('admin/css/offcanvas.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

@include('layouts.admin.partials.navigation')

<div class="container-fluid">

    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar">
            @yield('side-navigation')
        </div><!--/.sidebar-offcanvas-->

        <div class="col-xs-12 col-sm-9 col-md-10">
            <p class="pull-left visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            @yield('content')
        </div><!--/.col-xs-12.col-sm-9-->


    </div><!--/row-->

    <hr>



</div><!--/.container-->

<div class="container">
    <footer>
        <p>&copy; Spontanuity {{ date('Y') }}</p>
    </footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ URL::asset('admin/js/bootstrap.min.js') }}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ URL::asset('admin/js/ie10-viewport-bug-workaround.js') }}"></script>

<script src="{{ URL::asset('admin/js/offcanvas.js') }}"></script>
@yield('scripts')
</body>
</html>