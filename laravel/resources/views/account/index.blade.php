@extends('template.master')

@section('judul')
  <h1>Ini halaman index</h1>
@endsection

@section('content')
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Index User</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <a href="{{ route('createAccount') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Tambah
      </a>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->
@endsection
