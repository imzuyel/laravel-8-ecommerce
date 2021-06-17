@extends('backend.app')
@section('title')
{{ isset($slider->id) ? 'Update slider' : 'Create slider' }}
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
        <li class="breadcrumb-item active" aria-current="page">{{ isset($slider->id) ? 'Update slider' : 'Create slider' }}</li>
      </ol>
    </nav>
  </div>
</div>
<form action="{{ isset($slider->id) ? route('app.sliders.update', $slider->id) : route('app.sliders.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @isset($slider->id)
  @method('PUT')
  @endisset
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card radius-15 border-lg-top-info">
        <div class="card-header border-bottom-0 mb-4">
          <div class="d-flex align-items-center">
            <div>
              <h5 class="mb-lg-0">{{ isset($slider->id) ? 'Update slider' : 'Create slider' }}</h5>
            </div>
            <div class="ml-auto">
              @if (Auth::user()->hasPermission('app.sliders.index'))
              <a class="btn btn-primary m-1" href="{{ route('app.sliders.index') }}" data-toggle="tooltip" title="Back to all sliders &#9194;"><i class="bx bx-rewind"></i>Back</a>
              @endif
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">
            <div class="form-group">
              <label class="col-form-label">Title(en)</label>
              <input type="text" class="form-control  @error('title_en') is-invalid @enderror" name="title_en" value="{{ $slider->title_en ?? old('title_en') }}" placeholder="title_en" {{ !isset($slider) ? 'required' : '' }}>
              @error('title_en')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

            </div>
            <div class="form-group">
              <label class="col-form-label">Title(bn)</label>
              <input type="text" class="form-control  @error('title_bn') is-invalid @enderror" name="title_bn" value="{{ $slider->title_bn ?? old('title_bn') }}" placeholder="title_bn" {{ !isset($slider) ? 'required' : '' }}>
              @error('title_bn')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">Description(en)</label>
              <input type="text" class="form-control  @error('description_en') is-invalid @enderror" name="description_en" value="{{ $slider->description_en ?? old('description_en') }}" placeholder="Description English" {{ !isset($slider) ? 'required' : '' }}>
              @error('description_en')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
                <label class="col-form-label">Description(bn)</label>
                <input type="text" class="form-control  @error('description_bn') is-invalid @enderror" name="description_bn" value="{{ $slider->description_bn ?? old('description_bn') }}" placeholder="Description Bangla" {{ !isset($slider) ? 'required' : '' }}>
                @error('description_bn')
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
        <div class="card-header border-bottom-0 mb-5">
          <div class="d-flex align-items-center">
            <div>
              <h5 class="mb-0">Other info</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">
            <div class="form-group">
              <label class="col-form-label">Slider image</label>
              <input type="file" name="slider_img" class="dropify @error('slider_img') is-invalid @enderror" data-max-file-size-preview="8M" @if (isset($slider->slider_img)) data-default-file="/{{ $slider->slider_img }}" @endif
              {{ !isset($slider->id) ? 'required' : '' }} data-height="200" data-allowed-file-extensions="jpg jpeg png "/>
              @error('slider_img')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($slider->id)
              {{ $slider->status == 1 ? 'checked' : '' }}
              @endisset
              >
              <label class="custom-control-label" for="status">Status</label>
            </div>
            <div class="float-right">
              <div class="btn-group">
                @if (isset($slider->id))
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
