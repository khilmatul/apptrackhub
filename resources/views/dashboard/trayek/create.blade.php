@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="main-pages">
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Data Trayek</h1>
      </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card justify-content-center">
          <div class="card-body" >
              <form action="/trayek" method="POST">
                  @csrf
                      <div class="mb-2">
                        <label class="form-label" for="nama_trayek">Nama Trayek</label>
                        <input type="text" id="nama_trayek" name="nama_trayek" class="form-control @error('nama_trayek')is-invalid @enderror" value="{{ 'TRY-'.$kd }}" readonly="" required/>                        
                        @error('nama_trayek')
                        <div class="invalid-feedback">
                          {{ $message}}
                        </div>
                        @enderror
                      </div>
          
                  <div class="mb-2">
                    <label class="form-label" for="lokasi_berangkat">Lokasi Berangkat</label>
                    <input type="text" id="lokasi_berangkat" name="lokasi_berangkat" class="form-control @error('lokasi_berangkat')is-invalid @enderror"
                    value="{{ old('lokasi_berangkat') }}" required>
                    @error('lokasi_berangkat')
                      <div class="invalid-feedback">
                        {{ $message}}
                      </div>
                    @enderror
                  </div>
          
                  <div class="mb-2">
                    <label class="form-label" for="lokasi_tiba">Lokasi Tiba</label>
                    <input type="text" id="lokasi_tiba" name="lokasi_tiba" class="form-control @error('lokasi_tiba')is-invalid @enderror"
                    value="{{ old('lokasi_tiba') }}" required/>  
                    @error('lokasi_tiba')
                      <div class="invalid-feedback">
                        {{ $message}}
                      </div>
                    @enderror             
                  </div>  
    
                  <div class="mb-2">
                    <label class="form-label" for="via">Via</label>
                    <input type="text" id="via" name="via" class="form-control @error('via')is-invalid @enderror"
                    value="{{ old('via') }}" required/>
                    @error('via')
                      <div class="invalid-feedback">
                        {{ $message}}
                      </div>
                    @enderror                  
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