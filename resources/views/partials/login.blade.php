@if(Auth::guest())
    <div class="Login">
        <form method="POST" action="{{ URL::to('auth/login') }}" class="Login__form">
            {!! csrf_field() !!}

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div>
                <input type="checkbox" name="remember"> <label for="remember">Remember Me</label>
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
@endif