@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Trayek</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="table-responsive">
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end card-header py-3">
          <a href="/trayek/create" class="m-0 btn btn-primary btn-sm ">Tambah Data</a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kode</th>
                    {{-- <th scope="col">Tanggal Daftar</th> --}}
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telepon</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">QR Code</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $row)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $row->kode }}</td>
                      {{-- <td>{{ $row->created_at }}</td> --}}
                      <td>{{ $row->nama_lengkap }}</td>
                      <td>{{ $row->tanggal_lahir }}</td>
                      <td>{{ $row->alamat }}</td>
                      <td>0{{ $row->no_telepon }}</td>
                      <td>{{ $row->asal_sekolah }}</td>
                      <td>{{ $row->qr_code }}</td>
                      <td >
                        <div class="row m-1">
                          <div class="col-md-6">
                            <a href="/edit/{{ $row->slug }}" class="btn btn-secondary btn-sm border-0"><i class="fa-solid fa-pen-to-square"></i></a>                                                     
                          </div>
                          <div class="col-md-6">
                            <form action="/trayek/{{ $row->slug }}" method="post">
                              @method('delete')
                              @csrf
                              <button class="btn btn-danger btn-sm border-0" onclick="return confirm('Apakah anda yakin menghapus data?')"><i class="fa-solid fa-trash-can"></i></button>
                            </form> 
                          </div>
                        </div>
                      </td>
                    </tr>                      
                  @endforeach                
                </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection