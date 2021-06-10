@extends('backend.app')
@section('title')
  Database Settings
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
            aria-current="page">Database Settings</li>
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
        action="{{ route('app.settings.database.update') }}">
        @csrf
        @method('PATCH')
        <div class="main-card mb-3 card">
          <div class="card-body">
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="db_connection">Database connection <code>{ key: db_connection }</code></label>
                  <input type="text"
                    name="db_connection"
                    id="db_connection"
                    class="form-control @error('db_connection') is-invalid @enderror"
                    value="{{ setting('db_connection') ?? old('db_connection') }}"
                    placeholder="Mysql">
                  @error('db_connection')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="db_host">Database host <code>{ key: db_host }</code></label>
                  <input type="text"
                    name="db_host"
                    id="db_host"
                    class="form-control @error('db_host') is-invalid @enderror"
                    value="{{ setting('db_host') ?? old('db_host') }}"
                    placeholder="127.0.0.1">
                  @error('db_host')
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
                  <label for="db_database">Database name <code>{ key: db_database }</code></label>
                  <input type="text"
                    name="db_database"
                    id="db_database"
                    class="form-control @error('db_database') is-invalid @enderror"
                    value="{{ setting('db_database') ?? old('db_database') }}"
                    placeholder="Database name">
                  @error('db_database')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="db_port">Database Port <code>{ key: db_port }</code></label>
                  <input type="text"
                    name="db_port"
                    id="db_port"
                    class="form-control @error('db_port') is-invalid @enderror"
                    value="{{ setting('db_port') ?? old('db_port') }}"
                    placeholder="Database Port">
                  @error('db_port')
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
                  <label for="db_username">Database username <code>{ key: db_username }</code></label>
                  <input type="text"
                    name="db_username"
                    id="db_username"
                    class="form-control @error('db_username') is-invalid @enderror"
                    value="{{ setting('db_username') ?? old('db_username') }}"
                    placeholder="admin">
                  @error('db_username')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="db_password">Database password <code>{ key: db_password }</code></label>
                  <input type="text"
                    name="db_password"
                    id="db_password"
                    class="form-control @error('db_password') is-invalid @enderror"
                    value="{{ setting('db_password') ?? old('db_password') }}"
                    placeholder="password">
                  @error('db_password')
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
