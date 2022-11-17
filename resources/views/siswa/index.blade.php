@extends('main')
@section('content')
<a href="/createdata" class="btn btn-primary"> Createdata </a>
<table class="table">
    <thead class="table-light">
     <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis kelamin</th>
        <th>nis</th>
        <th>foto</th>
        <th>Action</th>
     </tr>
    </thead>
    <tbody>
        @php
            $no = 1
        @endphp
        @foreach ($siswa as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jeniskelamin}}</td>
                <td>{{$data->nis}}</td>
                <td>
                    <img src="fotosiswa/{{$data->foto}}" width="100" alt="">
                </td>
                <td>
                    <a href="/deletesiswa/{{$data->id}}" class="btn btn-danger">delete</a>
                    <a href="/editsiswa/{{$data->id}}" class="btn btn-warning">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection