@extends('backend.app')
@section('title')
Project Backup
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
        <li class="breadcrumb-item active" aria-current="page">Backup</li>
      </ol>
    </nav>
  </div>

</div>
<div class="card border-lg-top-info radius-15">
  <div class="card-header border-bottom-0  mb-4">
    <div class="d-flex align-items-center">
      <div>
        <h5 class="mb-0">Manage Backup</h5>
      </div>
      <div class="ml-auto">
        @if (Auth::user()->hasPermission('app.backups.create'))
        <button type="button" onclick="event.preventDefault();
              document.getElementById('create_backup').submit()" class="btn btn-primary" data-toggle="tooltip" title="Create project backup &#9989">
          <i class="bx bx-plus"></i>
          <form id="create_backup" action="{{ route('app.backups.store') }}" method="post" style="display:none">
            @csrf
          </form>
        </button>
        @endif
        @if (Auth::user()->hasPermission('app.backups.index'))
        <button type="button" onclick="event.preventDefault();
              document.getElementById('clean_old_backup').submit()" class="btn btn-danger" data-toggle="tooltip" title="Clean last 7 days backup &#8987">
          <i class="bx bx-eraser"></i>
          <form id="clean_old_backup" action="{{ route('app.backups.clean') }}" method="post" style="display:none">
            @csrf
            @method('DELETE')
          </form>
        </button>
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
            <th>File Name</th>
            <th>Size</th>
            <th>Created</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($backups as $key => $backup)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>
              <code>{{ $backup['file_name'] }}</code>
            </td>
            <td>{{ $backup['file_size'] }}</td>
            <td>{{ $backup['created_at'] }}</td>
            <td>
              @if (Auth::user()->hasPermission('app.backups.download'))
              <a class="btn btn-sm btn-info" href="{{ route('app.backups.download', $backup['file_name']) }}" data-toggle="tooltip" title="Download this backup &#128229;"><i class="fadeIn animated bx bx-download"></i></a>
              @endif
              @if (Auth::user()->hasPermission('app.backups.destroy'))
              <form action="{{ route('app.backups.destroy', $backup['file_name']) }}" style="display: inline-block" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger delete-confirm" type="submit" data-toggle="tooltip" title="Delete this backup &#128683;">
                  <i class="fadeIn animated bx bx-trash"></i></button>
              </form>
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
<script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>t>
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
      , "bDestroy": true
    , }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
  });

</script>
@endpush
