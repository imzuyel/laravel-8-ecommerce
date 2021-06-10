@extends('backend.app')
@section('title')
  Socialite settings
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
            aria-current="page">Socialite settings</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      @include('backend.settings.sidebar')
    </div>
    <div class="col-md-9">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <h5 class="card-title">Note:</h5>
          <p>Get appropriate client id and secret form respected providers.</p>
        </div>
      </div>
      <form id="settingsFrom"
        method="POST"
        action="{{ route('app.settings.socialite.update') }}">
        @csrf
        @method('PATCH')
        <div class="main-card mb-3 card">
          <div class="card-body">
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="facebook_client_id">Facebook Client Id</label>
                  <input type="text"
                    name="facebook_client_id"
                    id="facebook_client_id"
                    class="form-control @error('mail_mailer') is-invalid @enderror"
                    value="{{ setting('facebook_client_id') ?? old('facebook_client_id') }}"
                    placeholder="Client Id">
                  @error('facebook_client_id')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="facebook_client_secret">Facebook Client Secret</label>
                  <input type="text"
                    name="facebook_client_secret"
                    id="facebook_client_secret"
                    class="form-control @error('facebook_client_secret') is-invalid @enderror"
                    value="{{ setting('facebook_client_secret') ?? old('facebook_client_secret') }}"
                    placeholder="Secret">
                  @error('facebook_client_secret')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="google_client_id">Google Client Id</label>
                  <input type="text"
                    name="google_client_id"
                    id="google_client_id"
                    class="form-control @error('mail_mailer') is-invalid @enderror"
                    value="{{ setting('google_client_id') ?? old('google_client_id') }}"
                    placeholder="Client Id">
                  @error('google_client_id')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="google_client_secret">Google Client Secret</label>
                  <input type="text"
                    name="google_client_secret"
                    id="google_client_secret"
                    class="form-control @error('google_client_secret') is-invalid @enderror"
                    value="{{ setting('google_client_secret') ?? old('google_client_secret') }}"
                    placeholder="Secret">
                  @error('google_client_secret')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="github_client_id">Github Client Id</label>
                  <input type="text"
                    name="github_client_id"
                    id="github_client_id"
                    class="form-control @error('mail_mailer') is-invalid @enderror"
                    value="{{ setting('github_client_id') ?? old('github_client_id') }}"
                    placeholder="Client Id">
                  @error('github_client_id')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="github_client_secret">Github Client Secret</label>
                  <input type="text"
                    name="github_client_secret"
                    id="github_client_secret"
                    class="form-control @error('github_client_secret') is-invalid @enderror"
                    value="{{ setting('github_client_secret') ?? old('github_client_secret') }}"
                    placeholder="Secret">
                  @error('github_client_secret')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
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
      </form>
    </div>
  </div>
@endsection
