@extends('backend.app')
@section('title')
Manage role
@endsection
@push('css')
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
        <li class="breadcrumb-item active" aria-current="page">Roles</li>
      </ol>
    </nav>
  </div>
</div>
<div class="card border-lg-top-danger radius-15">
  <div class="card-header border-bottom-0  mb-4">
    <div class="d-flex align-items-center">
      <div>
        <h5 class="mb-0">Manage Roles</h5>
      </div>
      <div class="ml-auto">
        @if (Auth::user()->hasPermission('app.roles.create'))
        <a class="btn btn-primary" href="{{ route('app.roles.create') }}" data-toggle="tooltip" title="Create new role  &#9989;"><i class="bx bx-plus"></i>Add</a>
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
            <th>Name</th>
            <th>Permission</th>
            <th>Modified</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($roles as $key => $role)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $role->name }}</td>
            <td>
              @if ($role->permissions->count() > 0)
              <span class="badge badge-info rounded " data-toggle="tooltip" title="This role has {{ $role->permissions->count() }} permission">{{ $role->permissions->count() }}</span>
              @else
              <span class="badge badge-danger" data-toggle="tooltip" title="No, permissions found">No</span>
              @endif
            </td>
            <td>{{ $role->updated_at->diffForHumans() }}</td>
            <td>
              @if (Auth::user()->hasPermission('app.roles.edit'))
              <a class="btn btn-sm btn-info" href="{{ route('app.roles.edit', $role->id) }}" data-toggle="tooltip" title="Edit &#128221"><i class="fadeIn animated bx bx-edit"></i></a>
              @endif
              @if (Auth::user()->hasPermission('app.roles.destroy'))
              @if ($role->deletable == true)
              <form action="{{ route('app.roles.destroy', $role->id) }}" style="display: inline-block" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger delete-confirm" type="submit" data-toggle="tooltip" title="Delete &#128683">
                  <i class="fadeIn animated bx bx-trash"></i></button>
              </form>
              @endif
              @endif

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
