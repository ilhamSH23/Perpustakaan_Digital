@extends('layout.footer')

@extends('layout.sidebar')
@section('konten')

<h3>Master Data</h3>
<span>Data Siswa</span>

<table class="table table-bordered mt-4">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Nis</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>

@endsection
@extends('layout.header')