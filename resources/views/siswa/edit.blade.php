@extends('main')
@section('content')
<form action="/editsiswa/{{$siswa->id}}" method="post" enctype="multipart/form-data">
@csrf

    <div class="mb-3">
      <label class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}">   
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jeniskelamin" required>
            <?php $kelamin = $siswa->kelamin ?>
            <option value="laki-laki" {{$kelamin === "laki-laki" ? 'selected="selected"' : "" }}>Laki-Laki</option>
            <option value="perempuan" {{$kelamin === "perempuan" ? 'selected="selected"' : "" }} >Perempuan</option>
        </select>
    </div>
    

    <div class="mb-3">
        <label class="form-label">foto</label>
        <img src="/fotosiswa/{{$siswa->foto}}" width="200" alt="">
        <input type="file" class="form-control" name="foto" value="{{$siswa->foto}}">   
        <input type="hidden" class="form-control" name="foto" value="{{$siswa->foto}}">   
    </div>

    <div class="mb-3">
        <label class="form-label">NIS</label>
        <input type="number" class="form-control" name="nis" value="{{$siswa->nis}}">   
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection