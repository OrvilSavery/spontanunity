@extends('layouts.master')

@section('content')
    @include('partials.banner', ['user' => Auth::user()->first_name . ' ' . Auth::user()->last_name, 'message' => 'Welcome To Spontanuity!'])

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default page-panel">
            <div class="panel-body">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="page-header">Lorem Ipsum Et Dolor</h2>
                        </div>
                        <div class="category-lists">
                            @foreach($categories as $category)
                                <div class="col-md-6">
                                    <div class="well category-list-item">
                                        <a class="choose-category">
                                            <h1>{{ $categoryInfo->find($category)->name }}</h1>

                                            <p class="lead">{{ $categoryInfo->find($category)->description }}</p>
                                            {!! Form::open(['route' => 'categoryAccount.store']) !!}
                                            {!! Form::hidden('category_id', $categoryInfo->find($category)->id) !!}
                                            {!! Form::hidden('user_id', Auth::user()->id) !!}
                                            {!! Form::close() !!}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-12 text-center">
                            @if($chosen < 4)
                                <a class="btn btn-primary refresh">Refresh</a>
                            @endif
                            @if($chosen >= 4)
                                <a href="{{ URL::to('dashboard') }}" class="btn btn-primary  continue">Continue</a>
                            @else
                                <a href="{{ URL::to('dashboard') }}"
                                   class="btn btn-default disabled continue">Continue</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>




@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('a.choose-category').on('click', function () {
                var form = $(this).find('form');
                var fields = form.serialize();
                var that = $(this).parent();
                $.ajax({
                    url: form.attr('action'),
                    data: fields,
                    method: form.attr('method'),
                    success: function (response) {
                        that.addClass(response.class);
                        if (response.chosen >= 4) {
                            $('a.refresh').fadeOut();
                            $('a.continue').addClass('btn-primary').removeClass('disabled');
                        }
                    }
                })
            });
        });
    </script>
@stop
