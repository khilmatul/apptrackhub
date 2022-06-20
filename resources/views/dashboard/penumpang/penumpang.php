@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Penumpang</h1>
    </div>
    <div class="table-responsive">
  </div>

<div class="row">
  <div class="col-md-12">
    <div class="card"> 
      <div class="d-grid gap-2 d-md-flex justify-content-md-end card-header">
        <a href="{{ url('penumpang/create') }}" class="me-2 btn btn-primary btn-sm"><i class="bi bi-plus"></i>Tambah Data</a>
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
                    <th scope="col">Asal Sekolah (Pelajar)</th>
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
                            <a href="{{ url('penumpang/'.$row->id.'/edit') }}" class="btn btn-secondary btn-sm border-0"><i class="fa-solid fa-pen-to-square"></i></a>                                                     
                          </div>
                          <div class="col-md-6">
                            <form action="{{ url('penumpang/'.$row->id) }}" method="post">
                              @csrf
                              <input type="hidden" name="_method" value="delete">
                              <button class="btn btn-danger btn-sm border-0 delete" data-id="{{ $row->id }}" data-name="{{ $row->nama_lengkap }}"><i class="fa-solid fa-trash-can"></i></button>
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
          <div class="d-grid gap-2 d-md-flex justify-content-md-end card-header bg-white">
            <div class="row row-cols-2" >
                {{-- <div class="col"> --}}
                  <h6 class="fw-semibold mt-2">Eksport Data</h6>
                {{-- </div> --}}
                <div class="col">
                  <div class="btn-group">
                    <a href="{{ url('eksportexcel') }}" class="btn btn-success btn-sm">CSV</a>
                    <a href="{{ url('eksportpdf') }}" class="btn btn-danger btn-sm">PDF</a>
                  </div>
                </div>
            </div>       
          </div>
      </div>
    </div>
</div>

@endsection