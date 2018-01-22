@extends('layouts.app')

@section('content')




    <!-- End Navbar -->

<div class="content">
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
            <div class="col-md-12 col-md-offset-4">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>
            <div class="col-md-12 col-md-offset-4">
                <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>            
        </div>
    </form>
</div>
  <div class="footer text-center">
    <div class="col-md-12 col-md-offset-4">
      <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
          Login
      </button>
    </div>
    <div class="col-md-12 col-md-offset-2" class="text-left">
      <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
        Login With Facebook
      </button>
    </div>
  </div>
    <div class="pull-left">
      <h6>
        <a href="{{ route('register') }}" class="link">Create Account</a>
      </h6>
    </div>
      <div class="pull-right">
        <h6>
          <a class="link" href="{{ route('password.request') }}">
            Forgot Your Password?
          </a>
        </h6>
      </div>



@endsection
