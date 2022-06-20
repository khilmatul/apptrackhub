@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Penumpang</h1>
    </div>
</div>

<div class="card-body">
    <form action="dtPenumpang" method="POST">
        @csrf
        <div class="mb-2">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" name="name" class="form-control" value="{{ $data->name }}"/>  
                
        </div>

        <div class="mb-2">
          <label class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control"
          value="{{ $data->alamat }}"/>
          
        </div>

        <div class="mb-2">
          <label class="form-label">No. Telp</label>
          <input type="text" name="notlp" class="form-control"
          value="{{ $data->notlp }}"/>
          
        </div>

        

        <div class="col-md-12 d-grid gap-2">
          <button class="btn" type="submit">Daftar</button>
        </div>
      </form>
</div>
@endsection