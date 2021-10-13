@extends('backend.app')
@push('css')
  <link href="{{ asset('/') }}backend/assets/plugins/select2/css/select2.min.css"
    rel="stylesheet" />
  <link href="{{ asset('/') }}backend/assets/plugins/select2/css/select2-bootstrap4.css"
    rel="stylesheet" />

@endpush
@section('content')

  <!--breadcrumb-->
  <div class="mb-3 page-breadcrumb d-none d-md-flex align-items-center">
    <div class="pr-3 breadcrumb-title">Dashboard</div>
    <div class="pl-3">
      <nav aria-label="breadcrumb">
        <ol class="p-0 mb-0 breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
          </li>
          <li class="breadcrumb-item"><a href="{{ route('app.upzilla.index') }}">Upzilla</a>
          </li>
          <li class="breadcrumb-item active"
            aria-current="page">{{ $title }}</li>
        </ol>
      </nav>
    </div>
    <div class="ml-auto">
      <div class="btn-group">
        <a class="px-3 m-1 btn btn-outline-primary radius-30"
          href="{{ route('app.upzilla.index') }}"><i class="mr-1 bx bx-plus"></i>Manage</a>
      </div>
    </div>
  </div>
  <hr>
  <!--end breadcrumb-->
  <div class="row">
    <div class="mx-auto col-12 col-lg-12">
      <div class="card radius-15 border-lg-top-primary">
        <div class="card-body">
          <div class="card-title">

            <h4 class="mb-0">{{ $title }}
            </h4>
          </div>
          <hr />
          <form
            action="{{ isset($upzilla->id) ? route('app.upzilla.update', $upzilla->id) : route('app.upzilla.store') }}"
            method="post">
            @csrf
            @isset($upzilla->id)
              @method('PUT')
            @endisset
            <div class="form-body">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Division</label>
                <div class="col-sm-4">
                  <select class="form-control single-select"
                    name="division_id"
                    id="division_id">
                    <option value="0">Select Division</option>
                    @if (!empty($divisions) || isset($upzilla->disision_id))
                      @foreach ($divisions as $division)
                        <option value="{{ $division->id }}"
                          @if (isset($upzilla->division_id) && $division->id == $upzilla->division_id) selected="selected" @endif>
                          {{ $division->name }}
                        </option>
                      @endforeach
                    @endif
                  </select>
                </div>
                <label class="col-sm-2 col-form-label">Dristrict</label>
                <div class="col-sm-4"
                  id="appendZillas">
                  @include('backend.place.upzilla.zillas')
                </div>

              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Upzilla</label>
                <div class="col-sm-10">
                  <input type="text"
                    class="form-control  @error('name') is-invalid @enderror"
                    name="name"
                    value="{{ $upzilla->name ?? old('name') }}"
                    placeholder="Upzilla name"
                    required>
                  @error('name')
                    <span class="text-danger"
                      role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit"
                    class="px-4 btn btn-primary">
                    @if (isset($upzilla->id))
                      Update
                    @else
                      Add
                    @endif
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--end row-->

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
  <script>

  </script>

@endpush
