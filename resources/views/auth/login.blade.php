<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>E-mart Login</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('/') }}backend/assets/images/favicon-32x32.png" type="image/png" />
  <!-- loader-->
  <link href="{{ asset('/') }}backend/assets/css/pace.min.css" rel="stylesheet" />
  <script src="{{ asset('/') }}backend/assets/js/pace.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/bootstrap.min.css" />
  <!-- Icons CSS -->
  <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/icons.css" />
  <!-- App CSS -->
  <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/app.css" />
</head>

<body class="bg-login">
  <!-- wrapper -->
  <div class="wrapper">
    <div class="section-authentication-login d-flex align-items-center justify-content-center">
      <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
          <div class="card radius-15">
            <div class="row no-gutters">
              <div class="col-lg-6">
                <div class="card-body p-md-5">
                  <div class="text-center">
                    <img src="{{ asset('/') }}backend/assets/images/logo-icon.png" width="80" alt="">
                    <h3 class="mt-4 font-weight-bold">Welcome Back</h3>
                  </div>
                  <div class="input-group shadow-sm rounded mt-5">
                    <div class="input-group-prepend"> <span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="{{ asset('/') }}backend/assets/images/icons/search.svg" alt="" width="16"></span>
                    </div>
                    <a href="{{ route('login.provider','google') }}" class="form-control  border-0 " value="Log in with google">Log in with google</a>
                  </div>
                  <div class="input-group shadow-sm rounded mt-5">
                    <div class="input-group-prepend"> <span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="{{ asset('/') }}backend/assets/images/icons/github.png" alt="" width="16"></span>
                    </div>
                    <a href="{{ route('login.provider','github') }}" class="form-control  border-0 " value="Log in with google">Log in with github</a>
                  </div>
                  <div class="login-separater text-center"> <span>OR LOGIN WITH EMAIL</span>
                    <hr />
                  </div>
                  <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group mt-4">
                      <label>Email Address</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Enter your email address" />

                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" />
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-row">
                      <div class="form-group col">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" id="remember" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                          <label class="custom-control-label" for="remember">Remember
                            Me</label>
                        </div>
                      </div>
                      @if (Route::has('password.request'))
                      <div class="form-group col text-right"> <a href="{{ route('password.request') }}"><i class='bx bxs-key mr-2'></i>Forget Password?</a>
                      </div>
                      @endif
                    </div>
                    <div class="btn-group mt-3 w-100">
                      <button type="submit" class="btn btn-primary btn-block">Log In</button>
                      <button type="submit" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
                      </button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <p class="mb-0">Do not have an account? <a href="{{ route('register') }}">Sign
                        up</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <img src="{{ asset('/') }}backend/assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
              </div>
            </div>
            <!--end row-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end wrapper -->
</body>
<!-- jQuery -->
<script src="{{ asset('/') }}backend/assets/js/jquery.min.js"></script>
@include('auth.toast')

</html>
