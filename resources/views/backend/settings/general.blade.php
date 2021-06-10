@extends('backend.app')
@section('title')
  General setting
@endsection
@push('css')

@endpush
@section('content')
  <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Dashboard</div>
    <div class="pl-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
          </li>
          <li class="breadcrumb-item active"
            aria-current="page">General settings</li>
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
      <form id="settingsFrom"
        autocomplete="off"
        role="form"
        method="POST"
        action="{{ route('app.settings.update') }}">
        @csrf
        @method('PATCH')
        <div class="main-card mb-3 card">
          <div class="card-body">
            <div class="form-group">
              <label for="site_title">Site Title <code>{ key: site_title }</code></label>
              <input type="text"
                name="site_title"
                id="site_title"
                class="form-control @error('site_title') is-invalid @enderror"
                value="{{ setting('site_title') ?? old('site_title') }}"
                placeholder="Site Title"
                required>
              @error('site_title')
                <span class="invalid-feedback"
                  role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="site_description">Site Description <code>{ key: site_description }</code></label>
              <textarea name="site_description"
                id="site_description"
                class="form-control @error('site_description') is-invalid @enderror">{{ setting('site_description') ?? old('site_description') }}</textarea>
              @error('site_description')
                <span class="invalid-feedback"
                  role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="site_address">Site Address <code>{ key: site_address }</code></label>
              <textarea name="site_address"
                id="site_address"
                class="form-control @error('site_address') is-invalid @enderror">{{ setting('site_address') ?? old('site_address') }}</textarea>
              @error('site_address')
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
      </form>
    </div>
  </div>
@endsection
