@extends('backend.app')
@section('title')
  Change password
@endsection
@section('content')

  <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Dashboard</div>
    <div class="pl-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
          </li>
          <li class="breadcrumb-item active"
            aria-current="page">Change Password</li>
        </ol>
      </nav>
    </div>
  </div>
  <form action="{{ route('app.profile.password.update') }}"
    method="post">
    @csrf
    <div class="row">
      <div class="col-12 col-lg-9 mx-auto">
        <div class="card radius-15 border-lg-top-info">
          <div class="card-header border-bottom-0 mb-4">
            <div class="align-items-center">
              <div>
                <h5 class="mb-lg-0 text-center">Change Password</h5>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="form-body mx-auto">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Current Password</label>
                <div class="col-sm-9">
                  <input class="form-control  @error('current_password') is-invalid @enderror"
                    name="current_password"
                    autocomplete="new-current_password"
                    placeholder="*******"
                    type="password"
                    required>
                  @error('current_password')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">New Password</label>
                <div class="col-sm-9">
                  <input type="password"
                    class="form-control  @error('password') is-invalid @enderror"
                    placeholder="******"
                    name="password"
                    required>
                  @error('password')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Confirm Password</label>
                <div class="col-sm-9">
                  <input type="password"
                    class="form-control"
                    placeholder="*******"
                    name="password_confirmation"
                    required>
                </div>
              </div>
              <div class="float-right">
                <div class="btn-group">
                  <button type="submit"
                    class="btn btn-primary px-2"
                    data-toggle="tooltip"
                    title="Update These data &#128190;"><i class="bx bx-task"></i> Update</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
