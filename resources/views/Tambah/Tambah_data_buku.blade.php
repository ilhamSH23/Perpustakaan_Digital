@extends('layout.footer')
@extends('layout.sidebar')
@section('konten')
    <div class="mb-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
              <label for="kode_buku" class="form-label">Kode Buku</label>
              <input type="text" class="form-control" name="kode_buku" id="kode_buku" placeholder="">
          </div>
          <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control" name="judul" id="judul" placeholder="">
          </div>
          <div class="mb-3">
              <label for="penerbit" class="form-label">Penerbit</label>
              <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="">
          </div>
          <div class="mb-3">
              <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
              <input type="year" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="">
          </div>
          <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="file" name="foto" id="foto" accept="image/*" class="form-control">
          </div>
          <div class="d-flex justify-content-end mt-4">
              <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
      </form>
      
@endsection
@extends('layout.header')
