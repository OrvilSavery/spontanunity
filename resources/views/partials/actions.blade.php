<table class="table table-bordered table-lg" style="background:#fff">
    <tbody>
        @foreach($events as $event)
            @if(!\App\EventUser::where('user_id', Auth::user()->id)->where('event_id', $event->id)->first())
                <span style="display:none">{{ $iterator++ }}</span>
                @if($iterator <= 4)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td><a href="{{ URL::route('actions.choose', $event->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i></a>
                            <a data-toggle="modal" data-target="#dismissAction" data-url="{{ URL::route('actions.dismiss', $event->id) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
                    </tr>
                @endif
            @endif
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="dismissAction" tabindex="-1" role="dialog" aria-labelledby="dismissAction">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Don't Like This Action</h4>
            </div>
            {!! Form::open() !!}
            <div class="modal-body">
                <p class="lead">To help us show you better actions in the future, do you mind telling why you don't like this
                    event?</p>

                <select name="reason" id="reason" class="form-control">
                    <option value="I'm not interested in it">I'm not interested in it</option>
                    <option value="I don't want to do it now">I don't want to do it now</option>
                    <option value="No reason">No reason</option>
                </select>

            </div>
            <div class="modal-footer">
                <a class="btn btn-default" data-dismiss="modal">Close</a>
                {!! Form::submit('Dismiss This Action', ['class' => 'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>