@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="main-pages">
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Data Angkutan</h1>
      </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card justify-content-center">
          <div class="card-body" >
              <form action="{{ url('angkutan/'. $model->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="PATCH">
                  
                  <div class="mb-2">
                    <label class="form-label">No Polisi</label>
                    <input type="text" name="no_polisi" class="form-control" value="{{ $model->no_polisi }}"/>                        
                  </div>

                  <div class="mb-2">
                    <label class="form-label">Nama Angkutan</label>
                    <input type="text" name="nama_angkutan" class="form-control" value="{{ $model->nama_angkutan }}"/>                        
                  </div>                        
          
                  <div class="mb-2">
                    <label class="form-label" for="sopir">Sopir</label>
                    <input type="text" name="sopir" class="form-control" value="{{ $model->sopir }}" required>
                  </div>
          
                  <div class="mb-2">
                    <label class="form-label" for="trayek">Trayek</label>
                    <input type="text" name="trayek" class="form-control" value="{{ $model->trayek }}"/>           
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