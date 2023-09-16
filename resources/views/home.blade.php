@include('layout.navbar')

@section('content')
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
<h1>{{ $TextJudul }}</h1>

<table class="center" border="1">
  <tr>
    <th>ID</th>
    <th>Tanggal</th>
    <th>Nik</th>
    <th>isi_laporan</th>
    <th>Foto</th>
    <th>status</th>
  </tr>


@foreach($pengaduan as $pengaduan)
<tr>
  <td>{{$pengaduan->id_pengaduan}}</td>
  <td>{{$pengaduan->tgl_pengaduan}}</td>
  <td>{{$pengaduan->nik}}</td>
  <td>{{$pengaduan->isi_laporan}}</td>
  <td>{{$pengaduan->foto}}</td>
  <td>{{$pengaduan->status}}</td>
</tr>
@endforeach
</table>
</body>


