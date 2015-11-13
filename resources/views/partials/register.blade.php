<div class="panel panel-default">
    <div class="panel-body">
        <h2>Let's Get Spontaneous!</h2>
        <form method="POST" action="{{ URL::to('auth/register') }}">
            {!! csrf_field() !!}
            <div class="row">
                <div class="form-group col-md-6">
                    <label>First Name</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label>Last Name</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control">
                </div>

                <div class="form-group col-md-12">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>

                <div class="form-group col-md-12">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group col-md-12">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <div class="form-group col-md-12">
                    {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
</div>