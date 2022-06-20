@extends('layouts.main')

@section('content')
<section class="home" id="home">
  <div class="content">
      <h3 class="fw-bolder">SELAMAT DATANG</h3>
      <h4 class="fw-bolder">LAYANAN ANGKUTAN PERKOTAAN</h4>
      <h4 class="fw-bolder">SIAP MELAYANI KEBUTUHAN</h4>
      <h4 class="fw-bolder">TRANSPORTASI ANDA</h4>
  </div>

  <div class="image">
    <img src="img/bg.png" alt="" />
  </div>
</section>

<!-- checking card -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8 cek">
      <h4 class="fw-bolder text-center">Unduh Kartu</h4>
      <div class="row row-cols-md-auto justify-content-center ">
        
        <div class="col-4 ">
          <label class="form-label h6 ">Nama Lengkap</label>
          <div class="input-group ">
            <input class="form-control" type="text" />
          </div>
        </div>
  
        <div class="col-4 ">
          <label class="form-label h6">Tanggal Lahir</label>
          <div class="input-group">
           <input class="form-control" type="date" />
          </div>
        </div>
  
        <div class="col-4">
          <button type="submit" class="btn">Lanjutkan</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- checking card end-->

  <!-- form regist -->
{{-- <div class="form-regis" id="register">
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-md-7 col-lg-5 regis ">
        <h4 class="fw-bolder text-center mb-4">Pendaftaran Kartu Penumpang</h4>
        <div class="card">
          <div class="card-body">
            <form>
              <div class="mb-2">
                <label class="form-label">Nama Lengkap</label>
                <input type="input" class="form-control"/>
              </div>

              <div class="mb-2">
                <label class="form-label">Tanggal Lahir</label>
                <div class="input-group">
                  <input class="form-control" type="date" />
                </div>
              </div>

              <div class="mb-2">
                <label class="form-label">Alamat</label>
                <textarea type="text-area" class="form-control"></textarea>
              </div>

              <div class="mb-2">
                <label class="form-label">No. Telepon</label>
                <input type="input" class="form-control" />
              </div>

              <div class="mb-2">
                <label class="form-label">Asal Sekolah (Jika Pelajar)</label>
                <input type="input" class="form-control" />
              </div>

              <div class="col-md-12 d-grid gap-2">
                <button class="btn" type="submit">Daftar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- form regist end -->

<!-- footer -->
<div class="container">
  <footer class="py-3 my-3">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Beranda</a></li>
      <li class="nav-item"><a href="/register" class="nav-link px-2 text-muted">Daftar Kartu</a></li>
      <li class="nav-item"><a href="/beranda" class="nav-link px-2 text-muted">Unduh Kartu</a></li>
      <li class="nav-item"><a href="/login" class="nav-link px-2 text-muted">Masuk</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 Layanan Angkutan Perkotaan Kabupaten Banyuwangi</p>
  </footer>
</div>
  <!-- end footer -->

  <!-- custom js -->
<script src="js/index.js"></script>
@endsection