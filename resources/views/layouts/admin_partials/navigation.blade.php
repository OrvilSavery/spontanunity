<nav class="navbar navbar-inverse navbar-fixed-top admin-top-nav" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="{{ URL::asset('library/img/logo.png') }}" class="hidden" width="125" alt="">Spontanuity Control Panel</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        {{--@include('layouts.admin_partials.boilerplate.dropdown-messages')--}}
        {{--@include('layouts.admin_partials.boilerplate.dropdown-alerts')--}}
        <li class="dropdown">
            <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown">
                {{ Auth::user()->first_name.' '.Auth::user()->last_name }} {{--!! Auth::user()->photo ? '<img src="'.URL::asset('uploads/users/'.Auth::user()->photo).'"  class="img-circle"width="45"/>' : null !!--}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                {{--<li>--}}
                    {{--<a href="{{ URL::to('admin/user/'.Auth::user()->id) }}"><i class="fa fa-fw fa-user"></i> Profile</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="{{ URL::to('admin/user/'.Auth::user()->id.'/edit') }}"><i class="fa fa-fw fa-gear"></i> Settings</a>--}}
                {{--</li>--}}
                {{--<li class="divider"></li>--}}
                <li>
                    <a href="{{ URL::to('logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="{{ isActive('admin') }}">
                <a href="{{ URL::to('admin') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="{{ isActive('admin/categories') }}">
                <a href="{{ URL::to('admin/categories') }}"><i class="fa fa-fw fa-cubes"></i> Categories</a>
            </li>
            <li class="{{ isActive('admin/events') }}">
                <a href="{{ URL::to('admin/events') }}"><i class="fa fa-fw fa-check-square"></i> Events</a>
            </li>
            <li class="{{ isActive('admin/users') }}">
                <a href="{{ URL::to('admin/users') }}"><i class="fa fa-fw fa-group"></i> Users</a>
            </li>
            {{--EXAMPLE OF DROPDOWN ELEMENT--}}
            {{--<li>--}}
                {{--<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>--}}
                {{--<ul id="demo" class="collapse">--}}
                    {{--<li>--}}
                        {{--<a href="#">Dropdown Item</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Dropdown Item</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
