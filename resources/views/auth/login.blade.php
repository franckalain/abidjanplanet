@extends('layouts.app')

@section('content')<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Admin</b>DashDashBoard</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="POST" action="{{ route('login') }}">
    @csrf
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><span class="fa fa-envelope form-control-feedback"></span>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <span class="fa fa-lock form-control-feedback"></span>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="row">

        <div class="col-xs-1">
        </div>
        <div class="col-xs-7">
          <div class="checkbox icheck">
            <label>
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-3">
          <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
          @if (Route::has('password.request'))

        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
    @endif

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
