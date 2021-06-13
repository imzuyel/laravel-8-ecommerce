@extends('backend.app')
@section('title')
{{ isset($subsubcategory->id) ? 'Update subsubcategory' : 'Create subsubcategory' }}
@endsection
@push('css')
<link href="{{ asset('/') }}backend/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
<link href="{{ asset('/') }}backend/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
@endpush
@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
  <div class="breadcrumb-title pr-3">Dashboard</div>
  <div class="pl-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($subsubcategory->id) ? 'Update subsubcategory' : 'Create subsubcategory' }}</li>
      </ol>
    </nav>
  </div>
</div>
<form action="{{ isset($subsubcategory->id) ? route('app.subsubcategories.update', $subsubcategory->id) : route('app.subsubcategories.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @isset($subsubcategory->id)
  @method('PUT')
  @endisset
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card radius-15 border-lg-top-info">
        <div class="card-header border-bottom-0 mb-4">
          <div class="d-flex align-items-center">
            <div>
              <h5 class="mb-lg-0">{{ isset($subsubcategory->id) ? 'Update subsubcategory' : 'Create subsubcategory' }}</h5>
            </div>
            <div class="ml-auto">
              @if (Auth::user()->hasPermission('app.categories.index'))
              <a class="btn btn-primary m-1" href="{{ route('app.subsubcategories.index') }}" data-toggle="tooltip" title="Back to all subsubcategories &#9194;"><i class="bx bx-rewind"></i>Back</a>
              @endif
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">
            <div class="form-group">
              <label class="col-form-label">Name</label>
              <input type="text" class="form-control  @error('subsubcategory_name_en') is-invalid @enderror" name="subsubcategory_name_en" value="{{ $subsubcategory->subsubcategory_name_en ?? old('subsubcategory_name_en') }}" placeholder="Subcategory name" {{ !isset($subsubcategory) ? 'required' : '' }}>
              @error('subsubcategory_name_en')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

            </div>
            <div class="form-group">
              <label class="col-form-label">নাম</label>
              <input type="text" class="form-control  @error('subsubcategory_name_bn') is-invalid @enderror" name="subsubcategory_name_bn" value="{{ $subsubcategory->subsubcategory_name_bn ?? old('subsubcategory_name_bn') }}" placeholder="উপ ক্যাটাগরি নাম" {{ !isset($subsubcategory) ? 'required' : '' }}>
              @error('subsubcategory_name_bn')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
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
              <label class=" col-form-label">Select Category</label>
              <select class="form-control single-select" name="category_id" id="category_id">
                  <option>Select Category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" @isset($subsubcategory->id)
                  {{ $subsubcategory->category_id == $category->id ? 'selected' : '' }}
                  @endisset
                  >
                  {{ $category->category_name_en }} / {{ $category->category_name_bn }}
                </option>
                @endforeach

              </select>

            </div>

            <div class="form-group">
                <label class="col-form-label">Sub category</label>
                <div id="appendSubCategory">
                  @include('backend.subsubcategories.include')
                </div>
            </div>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($subsubcategory->id)
              {{ $subsubcategory->status == 1 ? 'checked' : '' }}
              @endisset
              >
              <label class="custom-control-label" for="status">Status</label>
            </div>
            <div class="float-right">
              <div class="btn-group">
                @if (isset($subsubcategory->id))
                <button type="submit" class="btn btn-primary px-2" data-toggle="tooltip" title="Update These data &#128190;"><i class="bx bx-task"></i> Update</button>
                @else
                <button type="submit" class="btn btn-primary px-4" data-toggle="tooltip" title="Save to database &#128190;"> <i class="bx bx-save"></i> Save</button>
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
    theme: 'bootstrap4'
    , width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style'
    , placeholder: $(this).data('placeholder')
    , allowClear: Boolean($(this).data('allow-clear'))
  , });
</script>
@endpush
