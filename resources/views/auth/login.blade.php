@extends('layouts.app')

@section('content')
<div class="content-wrap">
  <div class="container clearfix">
    <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">
      <div class="tab-content clearfix" id="tab-register">
        <div class="card nobottommargin">
          <div class="card-body" style="padding: 40px;">
            <form class="nobottommargin" action="{{ route('login') }}" method="post">
              @csrf
              <h3>Login to your Account</h3>
              <div class="col_full">
                <label for="email">E-Mail Address :</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col_full">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="" class="form-control @error('password') is-invalid @enderror" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col_full nobottommargin">
                <button class="button button-3d button-black nomargin" >Login</button>
                <a href="{{ route('password.request') }}" class="fright">Forgot Password?</a>
              </div>
            </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection
