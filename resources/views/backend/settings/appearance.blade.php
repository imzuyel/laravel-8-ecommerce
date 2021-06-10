@extends('backend.app')
@section('title')
  Appearance Settings
@endsection
@push('css')
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
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
            aria-current="page">Appearance Settings</li>
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
        action="{{ route('app.settings.appearance.update') }}"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="main-card mb-3 card">
          <div class="card-body">
            <div class="form-group">
              <label for="site_logo">Logo (Only Image are allowed) <code>{ key: site_logo }</code></label>
              <input type="file"
                name="site_logo"
                id="site_logo"
                class="dropify @error('site_logo') is-invalid @enderror"
                @if (setting('site_logo')) data-default-file="/{{ setting('site_logo') }}" @endif>
              @error('site_logo')
                <span class="text-danger"
                  role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="site_favicon">Favicon (Only Image are allowed, Size: 33 X 33) <code>{ key: site_favicon
                  }</code></label>
              <input type="file"
                name="site_favicon"
                id="site_favicon"
                class="dropify @error('site_favicon') is-invalid @enderror"
                @if (setting('site_favicon')) data-default-file="/{{ setting('site_favicon') }}" @endif>
              @error('site_favicon')
                <span class="text-danger"
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
@push('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
    integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
    crossorigin="anonymous"></script>
  <script>
    $('.dropify').dropify({
      messages: {
        'default': 'Drag and drop a file here or click',
        'replace': 'Drag and drop or click to replace',
        'remove': 'Remove',
        'error': 'Ooops, something wrong happended.'
      }
    });

  </script>
@endpush
