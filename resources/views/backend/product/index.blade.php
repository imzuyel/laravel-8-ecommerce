@extends('backend.app')
@section('title')
All Products
@endsection
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')

<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
  <div class="breadcrumb-title pr-3">Dashboard</div>
  <div class="pl-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Products</li>
      </ol>
    </nav>
  </div>
</div>
<div class="card border-lg-top-info radius-15">
  <div class="card-header border-bottom-0 mb-4">
    <div class="d-flex align-items-center">
      <div>
        <h5>Controll Products</h5>
      </div>
      <div class="ml-auto">
        @if (Auth::user()->hasPermission('app.products.create'))
        <a class="btn btn-primary px-3" href="{{ route('app.products.create') }}" data-toggle="tooltip" title="Add new Category &#9989"><i class="bx bx-plus mr-1"></i>Add</a>
        @endif
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered text-center table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Action</th>
            <th>Status</th>
            <th>Name / নাম</th>
            <th>Code</th>
            <th>Price / মূল্য</th>
            <th>Quantity / পরিমাণ</th>
            <th>Brand / ব্র্যান্ড</th>
            <th>Category / ক্যাটাগরি</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $key => $product)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>
              @if (Auth::user()->hasPermission('app.products.edit'))
              <a class="btn btn-sm btn-success" href="{{ route('app.products.edit', $product->id) }}" data-toggle="tooltip" title="Edit &#128221"><i class="fadeIn animated bx bx-edit"></i>
              </a>
              <a class="btn btn-sm btn-info" href="{{ route('app.products.edit.multi-image', $product->id) }}" data-toggle="tooltip" title="Multi image &#127910;"><i class="fadeIn animated bx bx-camera"></i>
              </a>
              <a class="btn btn-sm btn-primary" href="{{ route('app.products.stock', $product->id) }}" data-toggle="tooltip" title="Stock &#128688"><i class="fadeIn animated bx bx-data"></i>
              </a>

              <a class="btn btn-sm btn-secondary" href="{{ route('app.products.show', $product->id) }}" data-toggle="tooltip" title="Show details &#128373"><i class="fadeIn animated bx bx-log-in-circle"></i>
              </a>
              @endif

              @if (Auth::user()->hasPermission('app.products.destroy'))
              <form action="{{ route('app.products.destroy', $product->id) }}" style="display: inline-block" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger delete-confirm" type="submit" data-toggle="tooltip" title="Delete &#128683">
                  <i class="fadeIn animated bx bx-trash"></i>
                </button>
              </form>
              @endif
            </td>
            <td>
              @if ($product->status)
              <a class="badge-info updateProductStatus" id="product-{{ $product->id }}" product_id="{{ $product->id }}" href="javascript:;">Active</a>
              @else
              <a class="badge-warning updateProductStatus" id="product-{{ $product->id }}" product_id="{{ $product->id }}" href="javascript:;">Inactive</a>
              @endif
            </td>

            <td>
              <div class="media align-items-center mt-3">
                <img @if (file_exists($product->image))
                src="/{{ $product->image}}"
                @else
                src="/images/no_image.jpg"
                @endif
                class="rounded-circle"
                alt=""
                width="45"
                height="45">
                <div class="media-body" style="flex: 0.5;">
                  <p class="font-weight-bold mb-0">{{ Str::limit( $product->product_name_en,20, '...') }}</p>
                  <p class="font-weight-bold mb-0">{{ Str::limit( $product->product_name_bn, 20, '...') }}</p>
                </div>
              </div>
            </td>
            <td>{{ $product->product_code }}</td>
            <td>{{ $product->price}}</td>
            <td>{{ $product->product_qty}}</td>
            <td>{{ $product->brand->brand_name_bn }} / {{ $product->brand->brand_name_en }}</td>
            <td>{{ $product->category->category_name_bn }} / {{ $product->category->category_name_en }}</td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
@push('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function() {
    $("#example").DataTable({
      "responsive": true
      , "lengthChange": true
      , "autoWidth": false
      , "buttons": ["pdf", "print"]
      , "bDestroy": true
    , }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');

  });

</script>
@endpush
