@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="main-pages">
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Data Penumpang</h1>
      </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card justify-content-center">
          <div class="card-body">
              <form action="{{ url('penumpang/'. $model->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="PATCH">
          
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-2">
                        <label class="form-label">Kode</label>
                        <input type="text" name="kode" class="form-control" value="{{ $model->kode }}" readonly=""/>  
                      </div>
                    </div>
                  </div>
          
                  <div class="row">
                    <div class="col-6">
                      <div class="mb-2">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="{{ $model->nama_lengkap }}"/>  
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="mb-2">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $model->tanggal_lahir }}"/>                        
                      </div>
                    </div>
                  </div>                          
          
                  <div class="mb-2">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control"
                    value="{{ $model->alamat }}"/>          
                  </div>
          
                  <div class="mb-2">
                    <label class="form-label">No. Telp</label>
                    <input type="text" name="no_telepon" class="form-control"
                    value="{{ $model->no_telepon }}"/>
                  </div>     
          
                  <div class="mb-2">
                    <label class="form-label">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" class="form-control"
                    value="{{ $model->asal_sekolah }}"/>               
                  </div> 
                  
                  <div class="mb-2">
                    <label class="form-label">QR Code</label>
                    <input type="text" name="qr_code" class="form-control"
                    value="{{ $model->qr_code }}"/>               
                  </div> 
          
                  <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection