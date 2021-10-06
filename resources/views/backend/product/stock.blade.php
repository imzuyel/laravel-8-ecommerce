@extends('backend.app')
@section('title')
Product stock update
@endsection

@section('content')
<div class="product-breadcrumb d-none d-md-flex align-items-center mb-3">
  <div class="breadcrumb-title pr-3">Dashboard</div>
  <div class="pl-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="product">
          Product stock update</li>
      </ol>
    </nav>
  </div>
</div>

<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card radius-15 border-lg-top-info">
      <div class="card-header border-bottom-0">
        <div class="d-flex align-items-center">
          <div>
            <h5 class="mb-lg-0">Update product stock</h5>
          </div>
          <div class="ml-auto">
            @if (Auth::user()->hasPermission('app.products.index'))
            <a class="btn btn-primary" href="{{ route('app.products.index') }}" data-toggle="tooltip" title="Back to products &#9194;"><i class="bx bx-rewind"></i>Back</a>
            @endif
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('app.products.stock.update') }}" method="post">
            @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <div class="form-body">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label class="col-form-label">Quantity <span class="text-danger">*</span></label>
                <input type="text" class="form-control  @error('product_qty_en') is-invalid @enderror" name="product_qty" value="{{ $product->product_qty  }}" placeholder="Product quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="5" required>
                @error('product_qty')
                <span class="text-danger" product="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

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
        </form>
      </div>
    </div>
  </div>

</div>
</div>

@endsection
