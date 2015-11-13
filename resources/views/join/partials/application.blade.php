<div class="panel panel-default application-form">
    <div class="panel-body">
        <div class="col-md-10 col-md-offset-1">
            <h2>Lorem Ipsum Et Dolor</h2>
            {!! Form::open(['route' => 'join.store']) !!}
            {!! Form::hidden('user_id', Auth::user()->id) !!}
            <div class="form-group">
                {!! Form::label('question_1', 'Question 1?') !!}
                {!! Form::text('question_1', '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('question_2', 'Question 2?') !!}
                {!! Form::text('question_2', '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('question_3', 'Question 3?') !!}
                {!! Form::text('question_3', '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('question_4', 'Question 4?') !!}
                {!! Form::text('question_4', '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('question_5', 'Question 5?') !!}
                {!! Form::text('question_5', '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Carpe The Spontanuity!', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="clearfix"></div>
    </div>
</div>