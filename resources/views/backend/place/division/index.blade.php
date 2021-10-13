@extends('backend.app')
@push('css')
  <!-- DataTables -->
  <link rel="stylesheet"
    href="{{ asset('backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet"
    href="{{ asset('backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet"
    href="{{ asset('backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')
  <!--breadcrumb-->
  <div class="mb-3 page-breadcrumb d-none d-md-flex align-items-center">
    <div class="pr-3 breadcrumb-title">Dashboard</div>
    <div class="pl-3">
      <nav aria-label="breadcrumb">
        <ol class="p-0 mb-0 breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}"><i class='bx bx-home-alt'></i></a>
          </li>
          <li class="breadcrumb-item active"
            aria-current="page">Division</li>
        </ol>
      </nav>
    </div>
    <div class="ml-auto">
      <div class="btn-group">
        <a class="px-3 m-1 btn btn-outline-primary radius-30"
          href="{{ route('app.division.create') }}"><i class="mr-1 bx bx-plus"></i>Add</a>
      </div>
    </div>
  </div>
  <hr>
  <!--end breadcrumb-->
  <div class="card">
    <div class="card-body">
      <div class="card-title">
        <h4 class="mb-0">Division manage</h4>
      </div>
      <hr />
      <div class="table-responsive">
        <table id="example"
          class="table table-striped table-bordered"
          style="width:100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($divisions as $key => $division)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $division->name }}</td>
                <td>

                  <a class="btn btn-sm btn-info"
                    href="{{ route('app.division.edit', $division->id) }}"><i
                      class="fadeIn animated bx bx-edit"></i></a>

                  <form action="{{ route('app.division.destroy', $division->id) }}"
                    style="display: inline-block"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger delete-confirm"
                      type="submit">
                      <i class="fadeIn animated bx bx-trash"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


@endsection
@push('js')
  <!--Data Tables js-->
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
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["pdf", "print"]
      }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');

    });
  </script>
@endpush
