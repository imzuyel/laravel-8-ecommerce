@extends('backend.app')
@section('title')
Create static pages
@endsection
@push('css')
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
        <li class="breadcrumb-item active" aria-current="page">Page create</li>
      </ol>
    </nav>
  </div>
</div>
<form action="{{ isset($page->id) ? route('app.pages.update', $page->id) : route('app.pages.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @isset($page->id)
  @method('PUT')
  @endisset
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card radius-15 border-lg-top-info">
        <div class="card-header border-bottom-0 mb-4">
          <div class="d-flex align-items-center">
            <div>
              <h5 class="mb-lg-0">Create page</h5>
            </div>
            <div class="ml-auto">
                @if (Auth::user()->hasPermission('app.pages.index'))
              <a class="btn btn-primary" href="{{ route('app.pages.index') }}" data-toggle="tooltip" title="Back to pages &#9194;"><i class="bx bx-rewind"></i>Back</a>
              @endif
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">
            <div class="form-group">
              <label class="col-form-label">Title</label>
              <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" value="{{ $page->title ?? old('title') }}" placeholder="title" {{ !isset($page) ? 'required' : '' }}>
              @error('title')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">Excerpt</label>
              <textarea name="excerpt" id="excerpt" class="form-control  @error('excerpt') is-invalid @enderror" placeholder="Short description">{{ $page->excerpt ?? old('excerpt') }}</textarea>
              @error('excerpt')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">Body</label>
              <textarea name="body" id="body" class="form-control" rows="10" cols="70">{{ $page->body ?? old('body') }}</textarea>
              @error('body')
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
              <h5 class="mb-0">Other information</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">
            <div class="form-group">
              <label class="col-form-label">Image</label>
              <input type="file" name="image" class="dropify @error('image') is-invalid @enderror" data-max-file-size-preview="8M" @if (isset($page->image)) data-default-file="/{{ $page->image }}" @endif
              {{ !isset($page->id) ? 'required' : '' }} />
              @error('image')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">Meta description</label>
              <textarea name="meta_description" id="meta_description" class="form-control  @error('title') is-invalid @enderror" placeholder="Meta description">{{ $page->meta_description ?? old('meta_description') }}</textarea>
              @error('meta_description')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">Meta keywords</label>
              <textarea name="meta_keywords" id="meta_keywords" class="form-control  @error('meta_keywords') is-invalid @enderror" placeholder="Meta keywords">{{ $page->meta_keywords ?? old('meta_keywords') }}</textarea>
              @error('meta_keywords')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($page->id)
              {{ $page->status == 1 ? 'checked' : '' }}
              @endisset
              >
              <label class="custom-control-label" for="status">Status</label>
            </div>
            <div class="float-right">
              <div class="btn-group">
                @if (isset($page->id))
                <button type="submit" class="btn btn-primary px-2" data-toggle="tooltip" title="Update those data &#128190;"><i class="bx bx-task"></i> Update</button>
                @else
                <button type="submit" class="btn btn-primary px-4" data-toggle="tooltip" title="Save to database &#128190;"> <i class="bx bx-save"></i>Save</button>
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
<script src="{{ asset('/') }}backend/assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  window.onload = function() {
    CKEDITOR.replace('body', {
      filebrowserBrowseUrl: filemanager.ckBrowseUrl
    , });
  }

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
