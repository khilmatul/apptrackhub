@extends('dashboard.layouts.mainDashboard')

@section('container')
<div class="main-pages">
    <div class="container my-1 ">
      <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h1 class="h3 mb-0 text-gray-800">Rekapitulasi Penumpang</h1>
      </div>
        <div class="card">
            <div class="d-grid gap-1 d-md-flex justify-content-end card-header">
              <form class="d-flex" role="search" action="{{ url('rekapitulasi') }}" method="GET">
                <input class="form-control form-control-sm me-1" type="search" name="search" placeholder="Cari" aria-label="Search">
                <button class="btn btn-warning btn-sm" type="submit">Cari</button>
              </form>
              <div class="dropdown">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Generate Data
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a href="{{ url('eksportexcel') }}" class="dropdown-item">CSV</a></li>
                  <li><a href="{{ url('eksportrekapitulasi') }}" class="dropdown-item">PDF</a></li>
                </ul>
              </div>
            </div> 

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead >
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Tanggal Lahir</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">No. Telepon</th>
                          <th scope="col">Asal Sekolah (Pelajar)</th>
                          <th scope="col">QR Code</th>
                        </tr>
                    </thead>
                    {{-- <tbody class="table-group-divider">
                        @foreach ($data as $index => $row)
                        <tr>
                          <td>{{ $index + $data->firstItem() }}</td>
                          <td>{{ $row->nama_lengkap }}</td>
                          <td>{{ $row->tanggal_lahir }}</td>
                          <td>{{ $row->alamat }}</td>
                          <td>0{{ $row->no_telepon }}</td>
                          <td>{{ $row->asal_sekolah }}</td>
                          <td>{{ $row->qr_code }}</td>
                        </tr>                      
                      @endforeach 
                    </tbody> --}}
                  </table>
                  {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    {{ $data->links() }}
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start text-gray-600 fs-6">
                   <p>Menampilkan</p> 
                    {{ $data->firstItem() }}
                    <p>-</p> 
                    {{ $data->lastItem() }}
                    <p>dari</p>
                    {{ $data->total() }}
                    <p>data</p>
                  </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection