@extends('layout.footer')

@extends('layout.sidebar')
@section('konten')
    <h3>Master Data</h3>
    <span>Data Siswa</span>
    <div class="d-flex justify-content-end mt-4">
        <a href="/dashboard" class="btn btn-primary btn-sm">Kembali</a>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <form action="" method="GET">
                <input type="search" id="inputPassword6" name="search" value="{{$search}}" class="form-control"
                    aria-describedby="passwordHelpInline" style="border-radius: 20px;">
            </form>
        </div>
    </div> 
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NO TELP</th>
                <th>Kode Kelas</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_siswa as $index => $d)
                <tr>
                    <th scope="d">{{ $index + $data_siswa->firstitem() }}</th>
                    <td>{{ $d->nis }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>{{ $d->no_telp }}</td>
                    <td>{{ $d->kode_kelas }}</td>
                    <td>
                        <a href="/edit/{{ $d->nis }}"class="btn btn-success btn-sm">Edit</a>
                        <a href="/delete/{{ $d->nis }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$data_siswa->links()}}
    <div class="d-flex justify-content-end mt-4">
        <a href="Tambah_data_siswa" class="btn btn-primary">Tambah Data</a>
    </div>
@endsection
@extends('layout.header')
