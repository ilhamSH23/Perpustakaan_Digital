<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class Controllerbuku extends Controller
{
    public function data_buku(Request $request)
    {
        $query = buku::query();
        
        if($request->input('search')){
            $query->where('kode_buku', 'LIKE', '%'.$request->search.'%');
        }
        $siswa = $query->paginate(2)->appends($request->only('search'));
        return view('Master Data.data_buku', [

            'data_buku' => $siswa,
            'search'=>$request->search
        ]);
    }
    public function tambah_buku()
    {
        return view('Tambah.tambah_data_buku');
    }
    public function tambah_data_buku(Request $request)
    {
        $request->validate([
           'kode_buku' => 'required',
           'judul' => 'required',
           'penerbit' => 'required',
           'tahun_terbit' => 'required',
           'foto' => 'required|image|max:255',
        ], [
            'kode_buku.required' => 'Kode buku harus diisi',
            'judul.required' => 'Judul buku harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'tahun_terbit.required' => 'Tahun terbit harus diisi',
            'foto.required' => 'Foto harus diisi',
            
        ]);

        $buku = new buku();
        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $buku->foto = $imageName;
        }
        

        $buku->save();
        return redirect('/data_buku');
    }
    public function edit_buku($kode_buku)
    {
        $buku = new buku();
        return view('Tambah.edit_data_buku', [
            'b' => $buku->find($kode_buku)
        ]);
    }
    public function update_buku(Request $request, $kode_buku){

        $request->validate([
           'kode_buku' => 'required',
           'judul' => 'required',
           'penerbit' => 'required',
           'tahun_terbit' => 'required',
           'foto' => 'required|image|max:255',
        ]);

        $buku = buku::find($kode_buku);
        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $buku->foto = $imageName;
        }

        $buku->save();
        return redirect('/data_buku');
    }
    public function delete_buku($kode_buku){
        $data = buku::find($kode_buku);
        $data->delete();
        return redirect('/data_buku');
    }
}
