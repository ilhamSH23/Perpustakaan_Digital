@extends('layout.footer')
@extends('layout.sidebar')
@section('konten')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
    <input type="kode buku" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Judul</label>
    <input type="judul" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
    <input type="penerbit" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
    <input type="tahun terbit" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
<div class="d-flex justify-content-end mt-4">
    <input class="btn btn-primary" type="submit" value="Submit">
</div>
@endsection
@extends('layout.header')