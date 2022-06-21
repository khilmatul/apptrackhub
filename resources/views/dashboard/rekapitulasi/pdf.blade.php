<!DOCTYPE html>
<html>
<head>
<style>
#penumpang {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#penumpang td, #penumpang th {
  border: 1px solid #ddd;
  padding: 8px;
}

#penumpang tr:nth-child(even){background-color: #cfccd8;}

#penumpang tr:hover {background-color: #ddd;}

#penumpang th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5a43a0;
  color: white;
}
</style>
</head>
<body>

<h1>Rekapitulasi Penumpang</h1>

<table id="penumpang">
  <tr>
    <th scope="col">No.</th>
        <th scope="col">Kode</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. Telepon</th>
        <th scope="col">Asal Sekolah</th>
  </tr>
  @php
      $no = 1;
  @endphp
  @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->kode }}</td>
            <td>{{ $row->nama_lengkap }}</td>
            <td>{{ $row->tanggal_lahir }}</td>
            <td>{{ $row->alamat }}</td>
            <td>0{{ $row->no_telepon }}</td>
            <td>{{ $row->asal_sekolah }}</td>
        </tr>                      
    @endforeach    
</table>

</body>
</html>