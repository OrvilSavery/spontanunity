@extends('layouts.master')

@section('content')
    @include('partials.banner', ['user' => Auth::user()->first_name . ' ' . Auth::user()->last_name, 'message' => 'You\'re In!'])

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default page-panel">
            <div class="panel-body">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="page-header">Dashboard</h2>

                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="list-group">
                                @foreach($chosenCats as $chosenCat)
                                    <div class="list-group-item">
                                        <div class="pull-left">
                                            {{ $category->find($chosenCat->category_id)->name }}
                                        </div>
                                        <div class="pull-right">
                                            <nobr>
                                                <small class="text-muted">Surprise Me:</small>
                                                <a href="">In A Couple of Days</a>
                                            </nobr>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="clearfix"></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @if($singleEvent !== null)
                            <div class="col-md-5">
                                <div class="well">
                                    <p class="lead">
                                        <small>One For The Road?</small>
                                    </p>
                                    <div class="list-group">
                                        <div class="list-group-item single-item">

                                            <div class="pull-left">
                                                <a data-toggle="modal" data-target="#completedAction"
                                                   class="btn btn-default btn-xs complete-action"><i
                                                            class="glyphicon glyphicon-ok"></i></a>
                                                {{ $singleEvent[2] }}
                                                {!! Form::open(['route' => 'action.store']) !!}
                                                    {!! Form::hidden('user_id', $singleEvent[1]) !!}
                                                    {!! Form::hidden('event_id', $singleEvent[0]) !!}
                                                    {!! Form::hidden('action', 1) !!}
                                                {!! Form::close() !!}
                                            </div>
                                            <div class="pull-right text-right">
                                                <a data-toggle="collapse" data-target="#single-description"
                                                   class="btn btn-info btn-xs"><i
                                                            class="glyphicon glyphicon-question-sign"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                            <small class="collapse" id="single-description">
                                                <div class="well">{{ $singleEvent[3] }}</div>
                                            </small>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="list-group-item list-group-item-success single-item-success hidden"></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <br><br>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal" id="completedAction" tabindex="-1" role="dialog" aria-labelledby="completedAction">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Congratulations!</h4>
                </div>
                <div class="modal-body text-center">
                    <span class="btn btn-lg btn-primary"><i class="glyphicon glyphicon-ok"></i></span>
                    <br><br>

                    <p>You got this!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('a.complete-action').on('click', function () {
                var form = $(this).find('form');
                var fields = form.serialize();
                var url = form.attr('action');
                var formMethod = form.attr('method');
                $.ajax({
                    url: url,
                    data: fields,
                    method: formMethod,
                    success: function(response) {
                        console.log(response.message);
                        $('.list-group-item.single-item').fadeOut();
                        $('.single-item-success').fadeOut();
                        $('.single-item-success').removeClass('hidden');
                        $('.single-item-success').fadeIn();
                    },
                    error: function(response) {
                        console.log('error');
                    }
                });
            });
        });
    </script>
@stop
