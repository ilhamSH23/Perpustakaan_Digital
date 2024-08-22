<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function(){
    return view('dashboard');
});

// Master Data
Route::get('/data_siswa',function(){
    return view('Master Data.data_siswa');
});
Route::get('data_buku',function(){
    return view('Master Data.data_buku');
});

// Transaksi
Route::get('peminjaman',function(){
    return view('Transaksi.peminjaman');
});
Route::get('pengembalian',Function(){
    return view('Transaksi.pengembalian');
});

// Tambah
Route::get('Tambah_data_buku',Function(){
    return view('Tambah.Tambah_data_buku');
});
Route::get('Tambah_data_siswa',Function(){
    return view('Tambah.Tambah_data_siswa');
});

// Laporan
Route::get('buku_belum_kembali',Function(){
    return view('Laporan.buku_belum_kembali');
});
Route::get('buku_terfavorit',Function(){
    return view('Laporan.buku_terfavorit');
});
Route::get('peminjaman_perhari',Function(){
    return view('Laporan.peminjaman_perhari');
});

// Tampilan user 
Route::get('Tampilan_user',Function(){
    return view('User.Tampilan_user');
});