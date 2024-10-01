@extends('layout.footer')

@extends('layout.sidebar')
@section('konten')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-items-center justify-content-between">
            <span class="card-title h5">Data siswa</span>
            <a href="/data_siswa" class="btn btn-primary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="nis" class="col-form-label col-3">Nis</label>
                    <div class="col-9">
                        <input type="number" name="nis" class="form-control" id="kode_buku" value="{{$d->nis}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-form-label col-3">nama</label>
                    <div class="col-9">
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$d->nama}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-form-label col-3">alamat</label>
                    <div class="col-9">
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{$d->alamat}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="no_telp" class="col-form-label col-3">no_telp</label>
                    <div class="col-9">
                        <input type="number" name="no_telp" id="no_telp"value="{{$d->no_telp}}"class="form-control" >
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
    @extends('layout.header')
