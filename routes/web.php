<?php

use App\Http\Controllers\Controllerbuku;
use App\Http\Controllers\Controlleruser;
use App\Http\Controllers\SiswaController;
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
Route::get('/data_buku',function(){
    return view('Master Data.data_buku');
});

// Transaksi
Route::get('/peminjaman',function(){
    return view('Transaksi.peminjaman');
});
Route::get('/pengembalian',Function(){
    return view('Transaksi.pengembalian');
});

// Tambah
Route::get('/data_buku',[Controllerbuku::class,'data_buku']);
Route::get('/data_siswa',[SiswaController::class,'index']);

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


// Edit
Route::get('edit_data',Function(){
    return view('Tambah.edit_data');
});
// simpan
Route::get('/Tambah_data_siswa',[SiswaController::class,'tambah']);
// tambah
Route::post('/Tambah_data_siswa',[SiswaController::class,'tambah_data']);
// Edit
Route::get('/edit/{nis}',[SiswaController::class,'edit']);
Route::post('/edit/{nis}',[SiswaController::class,'update']);
// search
Route::get('/delete/{nis}',[SiswaController::class,'delete']);



Route::get('/Tambah_data_buku',[Controllerbuku::class,'tambah_buku']);
Route::post('/Tambah_data_buku',[Controllerbuku::class,'tambah_data_buku']);
Route::get('/edit_buku/{kode_buku}',[Controllerbuku::class,'edit_buku']);
Route::post('/edit_buku/{kode_buku}',[Controllerbuku::class,'update_buku']);
Route::get('/delete_buku/{kode_buku}',[Controllerbuku::class,'delete_buku']);

// Tampilan User
Route::get('/',[Controlleruser::class, 'index']);