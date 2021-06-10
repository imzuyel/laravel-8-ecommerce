@extends('backend.app')
@section('title')
Edit user profile
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
            aria-current="page">Edit user profile</li>
        </ol>
      </nav>
    </div>
  </div>
  <form action="{{ route('app.profile.update') }}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="card radius-15 border-lg-top-info">
          <div class="card-header border-bottom-0 mb-4">
            <div class=" align-items-center">
              <div>
                <h5 class="mb-lg-0 text-center">User Profile</h5>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="form-body">
              <div class="form-group">
                <label class="col-form-label">Profile Image</label>
                <input type="file"
                  name="image"
                  class="dropify @error('image') is-invalid @enderror"
                  data-max-file-size-preview="8M"
                  @if (isset(Auth()->user()->image)) data-default-file="/{{ Auth()->user()->image }}"
                @else
                      data-default-file="/images/no_image.jpg" @endif />
                @error('image')
                  <span class="text-danger"
                    role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-12">
        <div class="card radius-15 ">
          <div class="card-header border-bottom-0">
            <div class=" align-items-center">
              <div>
                <h5 class="mb-0 text-center">Basic info</h5>
              </div>
              <hr>
            </div>
          </div>
          <div class="card-body">
            <div class="form-body">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                  <input type="text"
                    class="form-control  @error('name') is-invalid @enderror"
                    name="name"
                    value="{{ Auth::user()->name }}"
                    placeholder="Name"
                    required>
                  @error('name')
                    <span class="text-danger"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                  <input type="text"
                    class="form-control  @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ Auth::user()->email }}"
                    placeholder="Email"
                    required>
                  @error('email')
                    <span class="text-danger"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
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
