@extends('backend.app')
@section('title')
{{ isset($brand->id) ? 'Update brand' : 'Create brand' }}
@endsection
@push('css')
<link href="{{ asset('/') }}backend/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
<link href="{{ asset('/') }}backend/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
@endpush
@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
  <div class="breadcrumb-title pr-3">Dashboard</div>
  <div class="pl-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($brand->id) ? 'Update brand' : 'Create brand' }}</li>
      </ol>
    </nav>
  </div>
</div>
<form action="{{ isset($brand->id) ? route('app.brands.update', $brand->id) : route('app.brands.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @isset($brand->id)
  @method('PUT')
  @endisset
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card radius-15 border-lg-top-info">
        <div class="card-header border-bottom-0 mb-4">
          <div class="d-flex align-items-center">
            <div>
              <h5 class="mb-lg-0">{{ isset($brand->id) ? 'Update brand' : 'Create brand' }}</h5>
            </div>
            <div class="ml-auto">
              @if (Auth::user()->hasPermission('app.brands.index'))
              <a class="btn btn-primary m-1" href="{{ route('app.brands.index') }}" data-toggle="tooltip" title="Back to all brands &#9194;"><i class="bx bx-rewind"></i>Back</a>
              @endif
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">
            <div class="form-group">
              <label class="col-form-label">Name(en)</label>
              <input type="text" class="form-control  @error('brand_name_en') is-invalid @enderror" name="brand_name_en" value="{{ $brand->brand_name_en ?? old('brand_name_en') }}" placeholder="brand_name_en" {{ !isset($brand) ? 'required' : '' }}>
              @error('brand_name_en')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

            </div>
            <div class="form-group">
              <label class="col-form-label">Name(bn)</label>
              <input type="text" class="form-control  @error('brand_name_bn') is-invalid @enderror" name="brand_name_bn" value="{{ $brand->brand_name_bn ?? old('brand_name_bn') }}" placeholder="brand_name_bn" {{ !isset($brand) ? 'required' : '' }}>
              @error('brand_name_bn')
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
              <label class="col-form-label">Brand image</label>
              <input type="file" name="image" class="dropify @error('image') is-invalid @enderror" data-max-file-size-preview="8M" @if (isset($brand->image)) data-default-file="/{{ $brand->image }}" @endif
              {{ !isset($brand->id) ? 'required' : '' }} data-height="95" data-allowed-file-extensions="jpg jpeg png "/>
              @error('image')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($brand->id)
              {{ $brand->status == 1 ? 'checked' : '' }}
              @endisset
              >
              <label class="custom-control-label" for="status">Status</label>
            </div>
            <div class="float-right">
              <div class="btn-group">
                @if (isset($brand->id))
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
