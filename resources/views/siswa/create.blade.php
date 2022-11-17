@extends('main')
@section('content')
<form action="/createdata" method="post" enctype="multipart/form-data">
@csrf

    <div class="mb-3">
      <label class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama">   
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jeniskelamin" required>
            <option value="">pilih kelamin</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
    </div>
    

    <div class="mb-3">
        <label class="form-label">foto</label>
        <input type="file" class="form-control" name="foto">   
    </div>

    <div class="mb-3">
        <label class="form-label">NIS</label>
        <input type="number" class="form-control" name="nis">   
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection