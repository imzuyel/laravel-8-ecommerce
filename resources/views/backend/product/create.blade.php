@extends('backend.app')
@section('title')
{{ isset($product->id) ? 'Update product' : 'Create product' }}
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/select2/css/select2-bootstrap4.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/input-tags/css/tagsinput.css') }}" />
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
          {{ isset($product->id) ? 'Update product' : 'Create product' }}</li>
      </ol>
    </nav>
  </div>
</div>
<form action="{{ isset($product->id) ? route('app.products.update', $product->id) : route('app.products.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @isset($product->id)
  @method('PUT')
  @endisset
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card radius-15 border-lg-top-info">
        <div class="card-header border-bottom-0">
          <div class="d-flex align-items-center">
            <div>
              <h5 class="mb-lg-0">Create product</h5>
            </div>
            <div class="ml-auto">
              @if (Auth::user()->hasPermission('app.products.index'))
              <a class="btn btn-primary" href="{{ route('app.products.index') }}" data-toggle="tooltip" title="Back to products &#9194;"><i class="bx bx-rewind"></i>Back</a>
              @endif
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label class=" col-form-label">Brand <span class="text-danger">*</span></label>
                <select class="form-control single-select" name="brand_id" id="brand_id" required>
                  @foreach ($brands as $brand)
                  <option value="{{ $brand->id }}" @isset($product->
                    id)
                    {{ $product->brand_id == $brand->id ? 'selected' : '' }}
                    @endisset
                    >
                    {{ $brand->brand_name_en }} / {{ $brand->brand_name_bn }}
                  </option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-6">
                <label class=" col-form-label">Category <span class="text-danger">*</span></label>
                <select class="form-control single-select" name="category_id1" id="category_id1">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}" @isset($product->id)
                    {{ $product->category_id == $category->id ? 'selected' : '' }}
                    @endisset
                    >
                    {{ $category->category_name_en }} / {{ $category->category_name_bn }}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Sub category</label>
                <div id="appendSubCategory">
                  @include('backend.product.subcategory')
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class=" col-form-label">Sub sub category</label>
                <div id="appendSubSubCategory">
                  @include('backend.product.subsubcategory')
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Product Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control  @error('product_name_en') is-invalid @enderror" name="product_name_en" value="{{ $product->product_name_en ?? old('product_name_en') }}" placeholder="Product Name" required>
                @error('product_name_en')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">পণ্যের নাম <span class="text-danger">*</span></label>
                <input type="text" class="form-control  @error('product_name_bn') is-invalid @enderror" name="product_name_bn" value="{{ $product->product_name_bn ?? old('product_name_bn') }}" placeholder="পণ্যের নাম">
                @error('product_name_bn')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Quantity <span class="text-danger">*</span></label>
                <input type="text" class="form-control  @error('product_qty_en') is-invalid @enderror" name="product_qty_en" value="{{ $product->product_qty_en ?? old('product_qty_en') }}" placeholder="Product quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="5" required>
                @error('product_qty_en')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">পরিমাণ <span class="text-danger">*</span></label>
                <input type="text" class="form-control  @error('product_qty_bn') is-invalid @enderror" name="product_qty_bn" value="{{ $product->product_qty_bn ?? old('product_qty_bn') }}" placeholder="পণ্যের পরিমাণ" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="5" required>
                @error('product_qty_bn')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Price <span class="text-danger">*</span></label>
                <input type="text" class="form-control  @error('price_en') is-invalid @enderror" name="price_en" value="{{ $product->price_en ?? old('price_en') }}" placeholder="Product Price" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" required>
                @error('price_en')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">দাম <span class="text-danger">*</span></label>
                <input type="text" class="form-control  @error('price_bn') is-invalid @enderror" name="price_bn" value="{{ $product->price_bn ?? old('price_bn') }}" placeholder="পণ্যের দাম" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" required>
                @error('price_bn')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Discount %</label>
                <input type="text" class="form-control  @error('discount_en') is-invalid @enderror" name="discount_en" value="{{ $product->discount_en ?? old('discount_en') }}" placeholder="Product Discount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2">
                @error('discount_en')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">মূল্য ছাড় %</label>
                <input type="text" class="form-control  @error('discount_bn') is-invalid @enderror" name="discount_bn" value="{{ $product->discount_bn ?? old('discount_bn') }}" placeholder="পণ্যের মূল্য ছাড়" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2">
                @error('discount_bn')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col">
                <label class="col-form-label">Product tags <span class="text-danger">*</span></label>
                <input type="text" data-role="tagsinput" class="form-control  @error('product_tags_en') is-invalid @enderror" name="product_tags_en" value="{{ $product->product_tags_en ?? old('product_tags_en') }}" placeholder="Product tags English" {{ !isset($product) ? '' : '' }}>
                @error('product_tags_en')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label class="col-form-label">পণ্য ট্যাগ <span class="text-danger">*</span></label>
                <input type="text" data-role="tagsinput" class="form-control  @error('product_tags_bn') is-invalid @enderror" name="product_tags_bn" value="{{ $product->product_tags_bn ?? old('product_tags_bn') }}" placeholder="বাংলায় পণ্য ট্যাগ" {{ !isset($product) ? '' : '' }}>
                @error('product_tags_bn')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-form-label">Short Description</label>
              <textarea name="short_description_en" id="short_description_en" class="form-control  @error('short_description_en') is-invalid @enderror" placeholder="Short description">{{ $product->short_description_en ?? old('short_description_en') }}</textarea>
              @error('short_description_en')
              <span class="text-danger" product="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">সংক্ষিপ্ত বিবরণ </label>
              <textarea name="short_description_bn" id="short_description_bn" class="form-control  @error('short_description_bn') is-invalid @enderror" placeholder="সংক্ষিপ্ত বিবরণ">{{ $product->short_description_bn ?? old('short_description_bn') }}</textarea>
              @error('short_description_bn')
              <span class="text-danger" product="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label class="col-form-label">Long description <span class="text-danger">*</span></label>
              <textarea name="long_description_en" id="long_description_en" class="form-control" required>{{ $product->long_description_en ?? old('long_description_en') }}</textarea>
              @error('long_description_en')
              <span class="text-danger" product="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">দীর্ঘ বিবরণ <span class="text-danger">*</span></label>
              <textarea name="long_description_bn" id="long_description_bn" class="form-control" required>{{ $product->long_description_bn ?? old('long_description_bn') }}</textarea>
              @error('long_description_bn')
              <span class="text-danger" product="alert">
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
              <h5 class="mb-0">Other information</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label class="col-form-label">Size</label>
                  <input data-role="tagsinput" value="{{ isset($product->id) ? $product->size : 'S,M,L,XL'}}" type="text" class="form-control  @error('size') is-invalid @enderror" name="size" placeholder="Product size">
                  @error('size')
                  <span class="text-danger" product="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label class="col-form-label">Color</label>
                  <input data-role="tagsinput"  value="{{ isset($product->id) ? $product->product_color_en : 'Red,Black,Green'}}" type="text" class="form-control  @error('product_color_en') is-invalid @enderror" name="product_color_en"  placeholder="Product color ">
                  @error('product_color_en')
                  <span class="text-danger" product="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label class="col-form-label">রঙ</label>
                  <input data-role="tagsinput"  value="{{ isset($product->id) ? $product->product_color_bn : 'লাল,কালো,সবুজ'}}" type="text" class="form-control  @error('product_color_bn') is-invalid @enderror" name="product_color_bn" value="{{ $product->product_color_bn ?? old('product_color_bn') }}" placeholder="পণ্যের রঙ" {{ !isset($product) ? '' : '' }}>
                  @error('product_color_bn')
                  <span class="text-danger" product="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-form-label">Main Thambnail <span class="text-danger">*</span></label>
              <input type="file" name="image" class="dropify @error('image') is-invalid @enderror" data-max-file-size-preview="8M" @if (isset($product->image))
              data-default-file="/{{ $product->image }}" @endif
              {{ !isset($product->id) ? 'required' : '' }} />
              @error('image')
              <span class="text-danger" product="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' id="files" name="multi_img[]" multiple accept="image/*" />
                <div class="drag-text">
                  <h3>Product Multiple Image</h3>
                </div>
              </div>
            </div>



            <div class="form-group">
              <label class="col-form-label">Meta Kewords</label>
              <textarea name="meta_keywords_en" id="meta_keywords_en" class="form-control  @error('title') is-invalid @enderror" placeholder="Meta description">{{ $product->meta_keywords_en ?? old('meta_keywords_en') }}</textarea>
              @error('meta_keywords_en')
              <span class="text-danger" product="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label class="col-form-label">মেটা কীওয়ার্ড</label>
              <textarea name="meta_keywords_bn" id="meta_keywords_bn" class="form-control  @error('title') is-invalid @enderror" placeholder="মেটা কীওয়ার্ড">{{ $product->meta_keywords_bn ?? old('meta_keywords_bn') }}</textarea>
              @error('meta_keywords_bn')
              <span class="text-danger" product="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">Meta Description</label>
              <textarea name="meta_description_en" id="meta_description_en" class="form-control  @error('title') is-invalid @enderror" placeholder="Meta description">{{ $product->meta_description_en ?? old('meta_description_en') }}</textarea>
              @error('meta_description_en')
              <span class="text-danger" product="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">মেটা বিবরণ</label>
              <textarea name="meta_description_bn" id="meta_description_bn" class="form-control  @error('title') is-invalid @enderror" placeholder="মেটা বিবরণ">{{ $product->meta_description_bn ?? old('meta_description_bn') }}</textarea>
              @error('meta_description_bn')
              <span class="text-danger" product="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="hot_deals" name="hot_deals" @isset($product->id)
                  {{ $product->hot_deals == 1 ? 'selected' : '' }}
                  @endisset>
                  <label class="custom-control-label" for="hot_deals">Hot Deals</label>
                </div>
                @error('hot_deals')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="featured" name="featured" @isset($product->id)
                  {{ $product->featured == 1 ? 'selected' : '' }}
                  @endisset>
                  <label class="custom-control-label" for="featured">Featured</label>
                </div>
                @error('featured')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="special_offer" name="special_offer" @isset($product->id)
                  {{ $product->special_offer == 1 ? 'selected' : '' }}
                  @endisset>
                  <label class="custom-control-label" for="special_offer">Special Offer</label>
                </div>
                @error('special_offer')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="special_deals" name="special_deals" @isset($product->id)
                  {{ $product->special_deals == 1 ? 'selected' : '' }}
                  @endisset>
                  <label class="custom-control-label" for="special_deals">Special Deals</label>
                </div>
                @error('special_deals')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($product->id)
              {{ $product->status == 1 ? 'checked' : '' }}
              @endisset
              >
              <label class="custom-control-label" for="status">Status</label>
            </div>
            <div class="float-right">
              <div class="btn-group">
                @if (isset($product->id))
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
  </div>
</form>
@endsection
@push('js')
<script src="{{ asset('/') }}backend/assets/plugins/input-tags/js/tagsinput.js"></script>
<script src="{{ asset('/') }}backend/assets/plugins/select2/js/select2.min.js"></script>
<script>
  $('.single-select').select2({
    theme: 'bootstrap4'
    , width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style'
    , placeholder: $(this).data('placeholder')
    , allowClear: Boolean($(this).data('allow-clear'))
  , });

</script>
<script src="{{ asset('/') }}backend/assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('long_description_en', {
    filebrowserBrowseUrl: filemanager.ckBrowseUrl
  });
  CKEDITOR.add

</script>
<script type="text/javascript">
  CKEDITOR.replace('long_description_bn', {
    filebrowserBrowseUrl: filemanager.ckBrowseUrl
  });
  CKEDITOR.add

</script>

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
