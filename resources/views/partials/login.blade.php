<div class="panel panel-default">
    <div class="panel-body">
        <form method="POST" action="{{ URL::to('login') }}">
            {!! csrf_field() !!}


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember"> <label for="remember">Remember Me</label>
            </div>

            <div>
                {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
            </div>

        </form>
    </div>
</div>
