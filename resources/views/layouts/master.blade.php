
@include('layouts.partials.header')

<body class="@yield('body_class')">

    <div class="wrapper">
        @include('layouts.partials.navigation')
        @yield('content')
    </div>

    <div class="Modal" id="dismissAction">
        <div class="Modal__overlay">
            <div class="Container">
                <div class="Modal__content">
                    <div class="Modal__heading">Don't Like This Action?</div>
                    <div class="Modal__body">
                        <p>To help us show you better actions in the future, do you mind telling why you don't like this
                            event?</p>
                        {!! Form::open() !!}
                        <select name="reason" id="reason">
                            <option value="I'm not interested in it">I'm not interested in it</option>
                            <option value="I don't want to do it now">I don't want to do it now</option>
                            <option value="No reason">No reason</option>
                        </select>
                    </div>
                    <div class="Modal__footer">
                        <a class="cancel">I've changed my mind</a>
                        {!! Form::submit('Dismiss Action') !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="Modal" id="completeAction">
        <div class="Modal__overlay">
            <div class="Container">
                <div class="Modal__content">
                    <div class="Modal__heading">Finished with this action?</div>
                    <div class="Modal__body">
                        <p>To help us show you better actions in the future, do you mind telling how you felt about this action?</p>
                        {!! Form::open() !!}
                        <select name="experience" id="experience">
                            <option value="I really enjoyed this action">I really enjoyed this action</option>
                            <option value="I completed but am neutral about this action">I completed but am neutral about this action</option>
                            <option value="I didn't like this action">I didn't like this action</option>
                        </select>
                    </div>
                    <div class="Modal__footer">
                        <a class="cancel">I'm still working on this</a>
                        {!! Form::submit('Complete Action') !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <!--The Scripts-->
    <script src="{{ URL::asset('library/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('library/bower_components/vue/dist/vue.min.js') }}"></script>
    @yield('scripts')

</body>
</html>