@extends('layout.footer')
@extends('layout.sidebar')
@section('konten')
    <div class="card">
      <div class="card-header d-flex justify-items-center justify-content-between">
        <span class="card-title h5">Data siswa</span>
        <a href="/" class="btn btn-primary btn-sm">Kembali</a>
    </div>
        <div class="card-body">
            <form action="" method="post">
              @csrf
            <div class="mb-3">
                <label for="nis" class="form-label">Nis</label>
                <input type="number" name="nis" class="form-control" id="nis" placeholder="">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="">
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="alamat" placeholder="">
          </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telp </label>
                <input type="number" name="no_telp" class="form-control" id="no_telp" placeholder="">
            </div>
            <div class="mb-3">
                <label for="kode_kelas" class="form-label">Kode Kelas</label>
                <select name="kode_kelas" class="form-control" id=kode_kelas" placeholder=""> 
                    @foreach ($kelases as $kelas )
                        <option value="{{$kelas->kode_kelas}}">{{$kelas->kode_kelas}}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
    </div>
@endsection
@extends('layout.header')
