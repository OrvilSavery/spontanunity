<ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
    <li role="presentation" class="{{ navIs('admin/events') }}"><a href="{{ URL::to('admin/events') }}"><i class="glyphicon glyphicon-th-list"></i> Events List</a></li>
    <li role="presentation" class="{{ navIs('admin/events/create') }}"><a href="{{ URL::to('admin/events/create') }}"><i class="glyphicon glyphicon-plus"></i> Add Event</a></li>
</ul>