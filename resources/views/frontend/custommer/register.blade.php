@extends('frontend.app')
@push('css')

@endpush
@section('title')
User Login
@endsection
@section('content')
<!--section start-->
<section class="register-page section-b-space">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>create account</h3>

        <div class="theme-card">
          <form class="theme-form" method="POST" action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-row row">
              <div class="col-md-6">
                <label for="email">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Full name"  autocomplete="name" autofocus />
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="review">Email</label>
                <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="example@user.com" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-row row">
              <div class="col-md-6">
                <label for="email">Password</label>
                <input class="form-control border-right-0 @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password" type="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="review">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" >
              </div>

            </div>
            <button type="submit" class="btn btn-solid">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Section ends-->

@endsection
