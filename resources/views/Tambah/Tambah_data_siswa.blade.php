@extends('layout.footer')
@extends('layout.sidebar')
@section('konten')

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nis</label>
    <input type="nis" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
    <input type="alamat" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Telp </label>
    <input type="no_telp" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Kode Kelas</label>
    <input type="kode_kelas" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
<div class="d-flex justify-content-end mt-4">
    <input class="btn btn-primary" type="submit" value="Submit">
</div>
@endsection
@extends('layout.header')