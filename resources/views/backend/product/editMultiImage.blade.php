@extends('backend.app')
@section('title')
Multi Image update
@endsection
@push('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
<link rel="stylesheet" href="{{ asset('backend/assets/css/multiimage.css') }}" />
@endpush
@section('content')
<div class="product-breadcrumb d-none d-md-flex align-items-center mb-3">
  <div class="breadcrumb-title pr-3">Dashboard</div>
  <div class="pl-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="product">
          Multi Image update
      </ol>
    </nav>
  </div>
</div>


<div class="row">
  <div class=" col-lg-12">
    <div class="card radius-15 border-lg-top-info">
      <div class="card-header border-bottom-0 mb-4">
        <div class="text-center">
          <div>
            <h5 class="mb-0 text-center">Multi Image update</h5>
            <hr>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('app.products.update.multi-image') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-body">
            <div class="row">
              @forelse ($multiImages as $multiImage)
              <div class="col-md-3">
                <label class="col-form-label">Multi Image<span class="text-danger">*</span></label>
                <input type="file" name="multi_img[{{ $multiImage->id }}]" class="dropify @error('image') is-invalid @enderror" data-max-file-size-preview="8M" data-width="100" data-default-file="/{{ $multiImage->image_name }}" />

                <a href="{{ route('app.products.update.multi-image.delete',$multiImage->id) }}" class="btn btn-sm btn-block btn-danger delete-confirm1" type="submit" data-toggle="tooltip" title="Delete &#128683">
                  <i class="fadeIn animated bx bx-trash"></i>
                </a>

              </div>
              @empty
              <span class="text-danger" style="width: 100%;text-align: center">No image found</span>
              @endforelse
            </div>

            @isset($multiImage)

            <div class="float-right">
              <div class="btn-group">
                <button type="submit" class="btn btn-primary px-2" data-toggle="tooltip" title="Update multi image &#128190;"><i class="bx bx-task"></i> Update</button>
              </div>
            </div>
            @endisset
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class=" col-lg-12">
    <div class="card radius-15 border-lg-top-info">
      <div class="card-header border-bottom-0 mb-4">
        <div class="text-center">
          <div>
            <h5 class="mb-0 text-center">Add more image</h5>
            <hr>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('app.products.store.multiImage') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$id}}">
          <div class="form-body">
            <div class="form-group">
              <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' id="files" name="multi_img[]" multiple accept="image/*" required/>
                <div class="drag-text">
                  <h3>Product Multiple Image</h3>
                </div>
              </div>
            </div>
            <div class="float-right">
              <div class="btn-group">
                <button type="submit" class="btn btn-primary px-2" data-toggle="tooltip" title="Add more image image &#128190;"><i class="bx bx-task"></i> Add image</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
@push('js')


<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
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
