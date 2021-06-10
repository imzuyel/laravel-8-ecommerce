@extends('backend.app')
@section('title')
  {{ isset($user->id) ? 'Update user' : 'Create user' }}
@endsection
@push('css')
  <link href="{{ asset('/') }}backend/assets/plugins/select2/css/select2.min.css"
    rel="stylesheet" />
  <link href="{{ asset('/') }}backend/assets/plugins/select2/css/select2-bootstrap4.css"
    rel="stylesheet" />
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
            aria-current="page">{{ isset($user->id) ? 'Update user' : 'Create user' }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <form action="{{ isset($user->id) ? route('app.users.update', $user->id) : route('app.users.store') }}"
    method="post"
    enctype="multipart/form-data">
    @csrf
    @isset($user->id)
      @method('PUT')
    @endisset
    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="card radius-15 border-lg-top-info">
          <div class="card-header border-bottom-0 mb-4">
            <div class="d-flex align-items-center">
              <div>
                <h5 class="mb-lg-0">{{ isset($user->id) ? 'Update user' : 'Create user' }}</h5>
              </div>
              <div class="ml-auto">
                @if (Auth::user()->hasPermission('app.users.index'))
                <a class="btn btn-primary m-1"
                  href="{{ route('app.users.index') }}"
                  data-toggle="tooltip"
                  title="Back to all users &#9194;"><i class="bx bx-rewind"></i>Back</a>
                  @endif
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="form-body">
              <div class="form-group">
                <label class="col-form-label">Name</label>
                <input type="text"
                  class="form-control  @error('name') is-invalid @enderror"
                  name="name"
                  value="{{ $user->name ?? old('name') }}"
                  placeholder="Name"
                  {{ !isset($user) ? 'required' : '' }}>
                @error('name')
                  <span class="text-danger"
                    role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror

              </div>
              <div class="form-group">
                <label class="col-form-label">Email</label>
                <input type="email"
                  class="form-control  @error('email') is-invalid @enderror"
                  name="email"
                  value="{{ $user->email ?? old('email') }}"
                  placeholder="Email"
                  {{ !isset($user) ? 'required' : '' }}>
                @error('email')
                  <span class="text-danger"
                    role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              @isset($user)
                <div class="form-group">
                  <label class="col-form-label">Current Password</label>
                  <input class="form-control  @error('current_password') is-invalid @enderror"
                    name="current_password"
                    autocomplete="new-current_password"
                    placeholder="Current password"
                    type="password">
                  @error('current_password')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-form-label">New Password</label>
                  <input type="password"
                    class="form-control"
                    placeholder="New password"
                    name="password">
                  @error('password')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              @else
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <input class="form-control  @error('password') is-invalid @enderror"
                    name="password"
                    autocomplete="new-password"
                    placeholder="Password"
                    type="password"
                    required>
                  @error('password')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-form-label">Retype Password</label>
                  <input type="password"
                    class="form-control"
                    placeholder="Retype password"
                    name="password_confirmation"
                    required>
                  @error('password_confirmation')
                    <span class="invalid-feedback"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              @endisset
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="card radius-15 border-lg-top-info">
          <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
              <div>
                <h5 class="mb-0">Other info</h5>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="form-body">
              <div class="form-group">
                <label class=" col-form-label">Select Role</label>
                <select class="form-control single-select"
                  name="role_id"
                  id="role_id">
                  @foreach ($roles as $role)
                    <option value="{{ $role->id }}"
                      @isset($user->id)
                        {{ $user->role_id == $role->id ? 'selected' : '' }}
                      @endisset
                      >
                      {{ $role->name }}
                    </option>
                  @endforeach

                </select>

              </div>
              <div class="form-group">
                <label class="col-form-label">Image</label>
                <input type="file"
                  name="image"
                  class="dropify @error('image') is-invalid @enderror"
                  data-max-file-size-preview="8M"
                  @if (isset($user->image)) data-default-file="/{{ $user->image }}" @endif
                  {{ !isset($user->id) ? 'required' : '' }} />
                @error('image')
                  <span class="text-danger"
                    role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="custom-control custom-switch">
                <input type="checkbox"
                  class="custom-control-input"
                  id="status"
                  name="status"
                  @isset($user->id)
                  {{ $user->status == 1 ? 'checked' : '' }}
                @endisset
                >
                <label class="custom-control-label"
                  for="status">Status</label>
              </div>
              <div class="float-right">
                <div class="btn-group">
                  @if (isset($user->id))
                    <button type="submit"
                      class="btn btn-primary px-2"
                      data-toggle="tooltip"
                      title="Update These data &#128190;"><i class="bx bx-task"></i> Update</button>
                  @else
                    <button type="submit"
                      class="btn btn-primary px-4"
                      data-toggle="tooltip"
                      title="Save to database &#128190;"> <i class="bx bx-save"></i> Save</button>
                  @endif
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
  <script src="{{ asset('/') }}backend/assets/plugins/select2/js/select2.min.js"></script>
  <script>
    $('.single-select').select2({
      theme: 'bootstrap4',
      width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
      placeholder: $(this).data('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });

  </script>

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
