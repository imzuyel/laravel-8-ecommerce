@extends('backend.app')
@section('title')
{{ isset($coupon->id) ? 'Update coupon' : 'Create coupon' }}
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
        <li class="breadcrumb-item active" aria-current="page">{{ isset($coupon->id) ? 'Update coupon' : 'Create coupon' }}</li>
      </ol>
    </nav>
  </div>
</div>
<form action="{{ isset($coupon->id) ? route('app.coupons.update', $coupon->id) : route('app.coupons.store') }}" method="post">
  @csrf
  @isset($coupon->id)
  @method('PUT')
  @endisset
  <div class="row">
    <div class="col-12 col-lg-12">
      <div class="card radius-15 border-lg-top-info">
        <div class="card-header border-bottom-0 mb-4">
          <div class="d-flex align-items-center">
            <div>
              <h5 class="mb-lg-0">{{ isset($coupon->id) ? 'Update coupon' : 'Create coupon' }}</h5>
            </div>
            <div class="ml-auto">
              @if (Auth::user()->hasPermission('app.coupons.index'))
              <a class="btn btn-primary m-1" href="{{ route('app.coupons.index') }}" data-toggle="tooltip" title="Back to all coupons &#9194;"><i class="bx bx-rewind"></i>Back</a>
              @endif
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-body">
            <div class="form-group">
              <label class="col-form-label">Name</label>
              <input type="text" class="form-control  @error('coupon_name') is-invalid @enderror" name="coupon_name" value="{{ $coupon->coupon_name ?? old('coupon_name') }}" placeholder="Coupon name" {{ !isset($coupon) ? 'required' : '' }}>
              @error('coupon_name')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

            </div>
            <div class="form-group">
              <label class="col-form-label">Discount  <code>%</code></label>
              <input type="number" class="form-control  @error('coupon_discount') is-invalid @enderror" name="coupon_discount" value="{{ $coupon->coupon_discount ?? old('coupon_discount') }}" placeholder="Coupon discount %" {{ !isset($coupon) ? 'required' : '' }}>
              @error('coupon_discount')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-form-label">Validity</label>
              <input type="date" class="form-control  @error('coupon_validity') is-invalid @enderror" name="coupon_validity" value="{{ $coupon->coupon_validity ?? old('coupon_validity') }}" placeholder="Coupon validity" {{ !isset($coupon) ? 'required' : '' }} min="{{  Carbon\Carbon::now()->format('Y-m-d')}}">
              @error('coupon_validity')
              <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($coupon->id)
                {{ $coupon->status == 1 ? 'checked' : '' }}
                @endisset
                >
                <label class="custom-control-label" for="status">Status</label>
              </div>
            <div class="float-right">
                <div class="btn-group">
                  @if (isset($coupon->id))
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
@endpush
