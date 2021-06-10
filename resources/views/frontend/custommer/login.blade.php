@extends('frontend.app')
@push('css')

@endpush
@section('title')
User Login
@endsection
@section('content')
<!--section start-->
<section class="login-page section-b-space">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h3>Login</h3>
        <div class="theme-card">
          <div class="input-group shadow-sm rounded mt-5">
            <div class="input-group-prepend"> <span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="{{ asset('/') }}backend/assets/images/icons/search.svg" alt="" width="16"></span>
            </div>
            <a href="{{ route('login.provider', 'google') }}" class="form-control  border-0 " value="Log in with google">Log in with google</a>
          </div>
          <div class="input-group shadow-sm rounded mt-5">
            <div class="input-group-prepend"> <span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="{{ asset('/') }}backend/assets/images/icons/github.png" alt="" width="16"></span>
            </div>
            <a href="{{ route('login.provider', 'github') }}" class="form-control  border-0 " value="Log in with google">Log in with github</a>
          </div>
          <br>
          <form class="theme-form" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email" placeholder="Email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </form>
        </div>
      </div>
      <div class="col-lg-6 right-login">
        <h3>New Customer</h3>
        <div class="theme-card authentication-right">
          <h6 class="title-font">Create A Account</h6>
          <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
            able to order from our shop. To start shopping click register.</p><a href="{{ route('user.register') }}" class="btn btn-solid">Create an Account</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Section ends-->

@endsection
