<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header col-xs-12 col-sm-3 col-md-2 ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ URL::asset('library/img/logo.png') }}" width="100" alt="Spontanuity"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse col-xs-12 col-sm-9 col-md-10">
            <ul class="nav navbar-nav">
                <li class="{{ navIs('admin') }}"><a href="#">Home</a></li>
                <li class="{{ navIs('admin/events') }}"><a href="{{ URL::to('admin/events') }}">Events</a></li>
                <li class="{{ navIs('admin/users') }}"><a href="#">Users</a></li>
                <li class="{{ navIs('admin/admins') }}"><a href="#">Admins</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->