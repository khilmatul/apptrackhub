@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="main-pages">
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Data Penumpang</h1>
      </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card justify-content-center">
          <div class="card-body" >
              <form action="/penumpang" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-2">
                        <label class="form-label" for="kode">Kode</label>
                        <input type="text" id="kode" name="kode" class="form-control @error('kode')is-invalid @enderror" value="{{ 'PNP-'.date('d-m-y').'-'.$kd }}" readonly=""  required/>                        
                        @error('kode')
                        <div class="invalid-feedback">
                          {{ $message}}
                        </div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row">                
                    <div class="col-6">
                      <div class="mb-2">
                        <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control @error('nama_lengkap')is-invalid @enderror" value="{{ old('nama_lengkap') }}" required/>                        
                        @error('nama_lengkap')
                        <div class="invalid-feedback">
                          {{ $message}}
                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="mb-2">
                        <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control @error('tanggal_lahir')is-invalid @enderror" value="{{ old('tanggal_lahir') }}" required/>                        
                        @error('tanggal_lahir')
                        <div class="invalid-feedback">
                          {{ $message}}
                        </div>
                        @enderror
                      </div>
                    </div>
                  </div>            
          
                  <div class="mb-2">
                    <label class="form-label" for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control @error('alamat')is-invalid @enderror"
                    value="{{ old('alamat') }}" required>
                    @error('alamat')
                      <div class="invalid-feedback">
                        {{ $message}}
                      </div>
                    @enderror
                  </div>
          
                  <div class="mb-2">
                    <label class="form-label" for="no_telepon">No. Telp</label>
                    <input type="text" id="no_telepon" name="no_telepon" class="form-control @error('no_telepon')is-invalid @enderror"
                    value="{{ old('no_telepon') }}" required/>  
                    @error('no_telepon')
                      <div class="invalid-feedback">
                        {{ $message}}
                      </div>
                    @enderror             
                  </div>  
    
                  <div class="mb-2">
                    <label class="form-label" for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" id="asal_sekolah" name="asal_sekolah" class="form-control @error('asal_sekolah')is-invalid @enderror"
                    value="{{ old('asal_sekolah') }}" required/>
                    @error('asal_sekolah')
                      <div class="invalid-feedback">
                        {{ $message}}
                      </div>
                    @enderror                  
                  </div>  
    
                  <div class="mb-2">
                    <label class="form-label" for="qr_code">QR Code</label>
                    <input type="text" id="qr_code" name="qr_code" class="form-control @error('qr_code')is-invalid @enderror"
                    value="{{ old('qr_code') }}" required/>
                    @error('qr_code')
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