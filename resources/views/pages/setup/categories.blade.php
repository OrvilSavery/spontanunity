@extends('layouts.master')

@section('heading')
    One More Thing&hellip;
@stop

@section('leadText')
@stop

@section('content')
    <div class="wrapper">
        <div class="page">
            {!! Form::open(['url' => 'user/categories', 'class' => 'categories']) !!}
            <div class="wrapper">
                <h2 class="text-center">Choose Your Categories</h2>

                <p class="text-center">Please choose at least 4</p>
            </div>
            <ul class="category-block">
                @foreach($categories as $category)
                    <li><a class="{{ \App\CategoryAccount::where('user_id', Auth::user()->id)->where('category_id', $category->id)->first() ? 'active' : null }}" data-category="{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
            <div class="clearfix"></div>
            <div class="wrapper">
                <div class="category-pagination">
                    {!! Form::hidden('category_id') !!}
                    {!! Form::hidden('user_id', Auth::user()->id) !!}
                    {{--{!! $categories->render() !!}--}}
                    <div class="clearfix"></div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    {!! Form::hidden('_token', csrf_token()) !!}
@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('ul.category-block a').on('click', function () {
                var that = $(this);
                var category = $(this).data('category');
                $("input[name='category_id']").val(category);
                var fields = $('form.categories').serialize();
                that.toggleClass('active');
                var dashboardURL = '{{ URL::to('/') }}';
                $.ajax({
                    method: 'POST',
                    url: '{{ URL::to('user/categories') }}',
                    data: fields
                }).done(function(response){
                    var minimum = response.categories;
                    if(minimum > 3) {
                        console.log('Minimum reached!');
                        $('.overlay-modal.generic h1').text('Categories Chosen!');
                        $('.overlay-modal.generic p').html('<a href="'+dashboardURL+'" class="button yellow-button">Finish Setup</a>');
                        $('.overlay-modal.generic').fadeIn(500);

                    }
                });
            });
        });
    </script>
@stop