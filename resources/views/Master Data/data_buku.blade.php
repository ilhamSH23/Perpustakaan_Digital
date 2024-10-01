@extends('layout.footer')

@extends('layout.sidebar')
@section('konten')
    <h3>Master Data</h3>
    <span>Data Buku</span>
    <div class="d-flex justify-content-end mt-4">
        <input class="btn btn-primary" type="submit" value="Kembali">
    </div>
    <table class="table table-bordered mt-4">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <form action="" method="GET">
                    <input type="search" id="inputPassword6" name="search" value="{{$search}}" class="form-control"
                        aria-describedby="passwordHelpInline" style="border-radius: 20px;">
                </form>
            </div>
        </div>        
        <thead>
            <tr>
                <th scope="col">No</th>
                <th>KODE_BUKU</th>
                <th>JUDUL</th>
                <th>PENERBIT</th>
                <th>TAHUN_TERBIT</th>
                <th>FOTO</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $index => $b)   
            <tr>
                <th scope="row">{{ $index + $data_buku->firstItem() }}</th>
                <td>{{ $b->kode_buku }}</td>
                <td>{{ $b->judul }}</td>
                <td>{{ $b->penerbit }}</td>
                <td>{{ $b->tahun_terbit }}</td>
                <td>
                    <img src="{{ asset('images/' . $b->foto) }}" alt="">
                </td>
                <td>
                    <a href="/edit_buku/{{ $b->kode_buku }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/delete_buku/{{ $b->kode_buku }}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
    {{ $data_buku->links() }}
    <div class="d-flex justify-content-end mt-4">
        <a href="Tambah_data_buku" class="btn btn-primary">Tambah Data</a>
    </div>
@endsection
@extends('layout.header')
