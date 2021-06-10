@extends('backend.app')
@section('title')
{{ isset($subcategory->id) ? 'Update subcategory' : 'Create subcategory' }}
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
        <li class="breadcrumb-item active" aria-current="page">{{ isset($subcategory->id) ? 'Update subcategory' : 'Create subcategory' }}</li>
      </ol>
    </nav>
  </div>
</div>
<form action="{{ isset($subcategory->id) ? route('app.subcategories.update', $subcategory->id) : route('app.subcategories.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @isset($subcategory->id)
  @method('PUT')
  @endisset
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card radius-15 border-lg-top-info">
        <div class="card-header border-bottom-0 mb-1">
          <div class="d-flex align-items-center">
            <div>
              <h5 class="mb-lg-0">{{ isset($subcategory->id) ? 'Update subcategory' : 'Create subcategory' }}</h5>
            </div>
            <div class="ml-auto">
              @if (Auth::user()->hasPermission('app.subcategories.index'))
              <a class="btn btn-primary m-1" href="{{ route('app.subcategories.index') }}" data-toggle="tooltip" title="Back to all subcategories &#9194;"><i class="bx bx-rewind"></i>Back</a>
              @endif
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">
            <div class="form-group">
              <label class="col-form-label">Name(en)</label>
              <input type="text" class="form-control  @error('subcategory_name_en') is-invalid @enderror" name="subcategory_name_en" value="{{ $subcategory->subcategory_name_en ?? old('subcategory_name_en') }}" placeholder="subcategory_name_en" {{ !isset($subcategory) ? 'required' : '' }}>
              @error('subcategory_name_en')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

            </div>
            <div class="form-group">
              <label class="col-form-label">Name(bn)</label>
              <input type="text" class="form-control  @error('subcategory_name_bn') is-invalid @enderror" name="subcategory_name_bn" value="{{ $subcategory->subcategory_name_bn ?? old('subcategory_name_bn') }}" placeholder="subcategory_name_bn" {{ !isset($subcategory) ? 'required' : '' }}>
              @error('subcategory_name_bn')
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
        <div class="card-header border-bottom-0 mb-4">
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
              <select class="form-control single-select" name="category_id" @foreach ($categories as $category) <option value="{{ $category->id }}" @isset($subcategory->id)
                {{ $subcategory->category_id == $category->id ? 'selected' : '' }}
                @endisset
                >
                {{ $category->category_name_en }} / {{ $category->category_name_bn }}
                </option>
                @endforeach

              </select>

            </div>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($subcategory->id)
              {{ $subcategory->status == 1 ? 'checked' : '' }}
              @endisset
              >
              <label class="custom-control-label" for="status">Status</label>
            </div>
            <div class="float-right">
              <div class="btn-group">
                @if (isset($subcategory->id))
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
<script>
  $('.dropify').dropify({
    messages: {
      'default': 'Drag and drop a file here or click'
      , 'replace': 'Drag and drop or click to replace'
      , 'remove': 'Remove'
      , 'error': 'Ooops, something wrong happended.'
    }
  });

</script>
@endpush
