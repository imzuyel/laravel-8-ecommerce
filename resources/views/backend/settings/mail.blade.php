@extends('backend.app')
@section('title')
  Mail settings
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
            aria-current="page">Mail settings</li>
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
          <h5 class="card-title">How To Use:</h5>
          <p>You can get the value of each setting anywhere on your site by calling <code>setting('key')</code></p>
        </div>
      </div>
      <form autocomplete="off"
        role="form"
        method="POST"
        action="{{ route('app.settings.mail.update') }}">
        @csrf
        @method('PATCH')
        <div class="main-card mb-3 card">
          <div class="card-body">
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="mail_mailer">Mailer <code>{ key: mail_mailer }</code></label>
                  <input type="text"
                    name="mail_mailer"
                    id="mail_mailer"
                    class="form-control @error('mail_mailer') is-invalid @enderror"
                    value="{{ setting('mail_mailer') ?? old('mail_mailer') }}"
                    placeholder="Mailer">
                  @error('mail_mailer')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="mail_encryption">Mail Encryption <code>{ key: mail_encryption }</code></label>
                  <input type="text"
                    name="mail_encryption"
                    id="mail_encryption"
                    class="form-control @error('mail_encryption') is-invalid @enderror"
                    value="{{ setting('mail_encryption') ?? old('mail_encryption') }}"
                    placeholder="Encryption Type">
                  @error('mail_encryption')
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
                  <label for="mail_host">Mail Host <code>{ key: mail_host }</code></label>
                  <input type="text"
                    name="mail_host"
                    id="mail_host"
                    class="form-control @error('mail_host') is-invalid @enderror"
                    value="{{ setting('mail_host') ?? old('mail_host') }}"
                    placeholder="Mail Host">
                  @error('mail_host')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="mail_port">Mail Port <code>{ key: mail_port }</code></label>
                  <input type="text"
                    name="mail_port"
                    id="mail_port"
                    class="form-control @error('mail_port') is-invalid @enderror"
                    value="{{ setting('mail_port') ?? old('mail_port') }}"
                    placeholder="Mail Port">
                  @error('mail_port')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="mail_username">Mail Username <code>{ key: mail_username }</code></label>
              <input type="text"
                name="mail_username"
                id="mail_username"
                class="form-control @error('mail_username') is-invalid @enderror"
                value="{{ setting('mail_username') ?? old('mail_username') }}"
                placeholder="Username">
              @error('mail_username')
                <span class="invalid-feedback"
                  role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="mail_password">Mail Password <code>{ key: mail_password }</code></label>
              <input type="password"
                name="mail_password"
                id="mail_password"
                class="form-control @error('mail_password') is-invalid @enderror"
                value="{{ setting('mail_password') ?? old('mail_password') }}"
                placeholder="Password">
              @error('mail_password')
                <span class="invalid-feedback"
                  role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="mail_from_address">Mail From Address <code>{ key: mail_from_address }</code></label>
              <input type="email"
                name="mail_from_address"
                id="mail_from_address"
                class="form-control @error('mail_from_address') is-invalid @enderror"
                value="{{ setting('mail_from_address') ?? old('mail_from_address') }}"
                placeholder="From Address">
              @error('mail_from_address')
                <span class="invalid-feedback"
                  role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="mail_from_name">Mail From Name <code>{ key: mail_from_name }</code></label>
              <input type="text"
                name="mail_from_name"
                id="mail_from_name"
                class="form-control @error('mail_from_name') is-invalid @enderror"
                value="{{ setting('mail_from_name') ?? old('mail_from_name') }}"
                placeholder="From Name">
              @error('mail_from_name')
                <span class="invalid-feedback"
                  role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
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
