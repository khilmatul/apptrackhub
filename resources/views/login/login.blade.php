@extends('layouts.main')

@section('content')
<div class="container login">
    <div class="row align-text-center justify-content-center">  
      <div class="col-md-6 col-lg-4 bg-white rounded p-4 shadow">
        <div class="row justify-content-center mb-4">
          <img src="img/logo.png" alt="" class="w-25" />
          <div>
            <h5 class="fw-bolder text-center text-uppercase mt-4">Layanan Angkutan Kota Kabupaten Banyuwangi</h5>
          </div>
        </div>
        <form action="/login" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama Pengguna</label>
            <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" placeholder="Masukkan nama pengguna" value="{{ old('username') }}" autofocus required/>
          </div>
          <div class="mb-3">
            <label class="form-label">Kata Sandi</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan kata sandi" required/>
          </div>
          <div class="col-md-12 d-grid gap-2">
            <button type="submit" class="btn loginbtn">Masuk</button>
          </div>
        </form>
        <small class="d-block text-center mt-3">Belum Daftar? <a href="/register">Silahkan Daftar</a></small>
      </div>
    </div>
  </div>
@endsection