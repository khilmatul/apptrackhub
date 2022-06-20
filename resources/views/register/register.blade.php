@extends('layouts.main')

@section('content')
<div class="form-regis">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-7 col-lg-5 regis ">          
          <div class="card">            
            <div class="card-body">
              <h4 class="fw-bolder text-center">Pendaftaran Kartu Penumpang</h4>
              <hr>
              <form action="/register" method="POST">
                @csrf
                <div class="mb-2">
                  <label class="form-label">Nama Lengkap</label>
                  <input type="input" name="name" class="form-control @error('name')is-invalid @enderror" placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}" required/>
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
                  @enderror
                </div>

                <div class="mb-2">
                  <label class="form-label">Nama Pengguna</label>
                  <input type="input" name="username" class="form-control @error('username')is-invalid @enderror" placeholder="Masukkan nama pengguna" value="{{ old('username') }}" required/>
                  @error('username')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
                  @enderror
                </div>
  
                {{-- <div class="mb-2">
                  <label class="form-label">Tanggal Lahir</label>
                  <div class="input-group">
                    <input class="form-control" name="tl" type="date" required/>
                    @error('tl')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
                  @enderror
                  </div>
                </div>
  
                <div class="mb-2">
                  <label class="form-label">Alamat</label>
                  <textarea type="text-area" name="alamat" class="form-control @error('alamat')is-invalid @enderror" placeholder="Masukkan Alamat" value="{{ old('alamat') }}" required></textarea>
                  @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
                  @enderror
                </div> --}}
  
                {{-- <div class="mb-2">
                  <label class="form-label">No. Telepon</label>
                  <input type="input" name="notlp" class="form-control @error('notlp')is-invalid @enderror" placeholder="Masukkan No. Telepon" value="{{ old('notlp') }}" required/>
                  @error('notlp')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
                  @enderror
                </div> --}}
  
                {{-- <div class="mb-2">
                  <label class="form-label">Asal Sekolah (Jika Pelajar)</label>
                  <input type="input" name="sekolah" class="form-control @error('sekolah')is-invalid @enderror" placeholder="Masukkan Asal Sekolah" value="{{ old('sekolah') }}" required/>
                  @error('sekolah')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
                  @enderror
                </div> --}}

                <div class="mb-2">
                  <label class="form-label">Kata Sandi</label>
                  <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" placeholder="Masukkan kata sandi" required/>
                  @error('password')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
                  @enderror
                </div>
  
                <div class="col-md-12 d-grid gap-2">
                  <button class="btn" type="submit">Daftar</button>
                </div>
              </form>
              <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login">Silahkan Login</a></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection