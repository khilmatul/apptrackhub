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

<h1>Data Trayek</h1>

<table id="penumpang">
  <tr>
    <th scope="col">No.</th>
        <th scope="col">Nama Trayek</th>
        <th scope="col">Lokasi Berangkat</th>
        <th scope="col">Lokasi Tiba</th>
        <th scope="col">Via</th>
  </tr>
  @php
      $no = 1;
  @endphp
  @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->nama_trayek }}</td>
            <td>{{ $row->lokasi_berangkat }}</td>
            <td>{{ $row->lokasi_tiba }}</td>
            <td>0{{ $row->via }}</td>
        </tr>                      
    @endforeach    
</table>

</body>
</html>