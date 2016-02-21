@extends('layouts.master')

@section('heading')
    Welcome!
@stop

@section('leadText')
@stop

@section('content')
    <div class="wrapper">
        <div class="page">
            {!! Form::open(['url' => 'user/name-and-gender']) !!}
            <div class="wrapper">
                <h2 class="text-center">Tell Us About Yourself</h2>
                <div class="form-group two-col">
                    <label for="">First Name</label>
                    {!! Form::text('first_name', Auth::user()->first_name ? Auth::user()->first_name : null, ['placeholder' => 'First Name', 'class' => 'form-style']) !!}
                </div>
                <div class="form-group two-col">
                    <label for="">Last Name</label>
                    {!! Form::text('last_name', Auth::user()->last_name ? Auth::user()->last_name : null, ['placeholder' => 'Last Name', 'class' => 'form-style']) !!}
                </div>
                <div class="clearfix"></div>
                <h4>I identify myself as...</h4>
            </div>
            <div class="gender-choices">
                <a class="female {{ Auth::user()->gender == 'F' ? 'active' : null }}" data-gender="F"><div><span>Female</span><br><img src="{{ URL::asset('library/img/ico-female.png') }}" width="45" alt=""></div></a>
                <a class="male {{ Auth::user()->gender == 'M' ? 'active' : null }}" data-gender="M"><div><span>Male</span><br><img src="{{ URL::asset('library/img/ico-male.png') }}" width="53" alt=""></div></a>
                <a class="both {{ Auth::user()->gender == 'B' ? 'active' : null }}" data-gender="B"><div><span>Both</span><br><img src="{{ URL::asset('library/img/ico-both.png') }}" width="53" alt=""></div></a>
                <a class="neither {{ Auth::user()->gender == 'N' ? 'active' : null }}" data-gender="N"><div><span>Neither</span><br><img src="{{ URL::asset('library/img/ico-neither.png') }}" width="68" alt=""></div></a>
            </div>
            <div class="clearfix"></div>
            <div class="wrapper">
                {!! Form::hidden('gender') !!}
                {!! Form::submit('Continue', ['class' => 'inactive']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@stop

@section('scripts')
    <script>
        $('document').ready(function(){
            $('.gender-choices a').on('click', function(){
                var gender = $(this).data('gender');
                $('.gender-choices a').removeClass('active');
                $(this).addClass('active');
                $('input[name="gender"]').val(gender);
            });
            setTimeout(function(){
               var gender = $('input[name="gender"]');
                var firstName = $('input[name="first_name"]');
                var lastName = $('input[name="last_name"]');
            });
        });
    </script>
@stop