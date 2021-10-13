@extends('backend.app')
@section('content')

  <!--breadcrumb-->
  <div class="mb-3 page-breadcrumb d-none d-md-flex align-items-center">
    <div class="pr-3 breadcrumb-title">Dashboard</div>
    <div class="pl-3">
      <nav aria-label="breadcrumb">
        <ol class="p-0 mb-0 breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
          </li>
          <li class="breadcrumb-item"><a href="{{ route('app.division.index') }}">Division</a>
          </li>
          <li class="breadcrumb-item active"
            aria-current="page">Create</li>
        </ol>
      </nav>
    </div>
    <div class="ml-auto">
      <div class="btn-group">
        <a class="px-3 m-1 btn btn-outline-primary radius-30"
          href="{{ route('app.division.index') }}"><i class="mr-1 bx bx-plus"></i>Manage</a>
      </div>
    </div>
  </div>
  <hr>
  <!--end breadcrumb-->
  <div class="row">
    <div class="mx-auto col-12 col-lg-10">
      <div class="card radius-15 border-lg-top-primary">
        <div class="card-body">
          <div class="card-title">
            <h4 class="mb-0">{{ $title }}</h4>
          </div>
          <hr />
          <form
            action="{{ isset($division->id) ? route('app.division.update', $division->id) : route('app.division.store') }}"
            method="post">
            @csrf
            @isset($division->id)
              @method('PUT')
            @endisset
            <div class="form-body">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Division Name</label>
                <div class="col-sm-10">
                  <input type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    value="{{ $division->name ?? old('name') }}"
                    placeholder="name">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit"
                    class="px-4 btn btn-primary">{{ isset($division->id) ? 'Update' : 'Add' }}</button>
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
