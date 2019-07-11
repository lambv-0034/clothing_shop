@extends('layouts.app')

@section('content')
<div class="content-wrap">
<div class="container clearfix">
  <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">
<div class="tab-content clearfix" id="tab-register">
<div class="card nobottommargin">
  <div class="card-body" style="padding: 40px;">
    <h3>Register for an Account</h3>
    <form  class="nobottommargin" method="post" action="{{ route('register') }}" >
      @csrf
      <div class="col_full">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}"
                class="form-control @error('name') is-invalid @enderror" />
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
        </div>
        <div class="col_full">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror" />
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="col_full">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                class="form-control" />
        </div>
        <div class="col_full">
            <label for="password">Choose Password:</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}"
                class="form-control @error('password') is-invalid @enderror" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="col_full">
            <label for="password-confirm">Re-enter Password:</label>
            <input type="password" id="password-confirm" name="password_confirmation" value=""
                class="form-control" />
        </div>
        <div class="col_full nobottommargin">
            <button class="button button-3d button-black nomargin" type="submit">Register now</button>
        </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
