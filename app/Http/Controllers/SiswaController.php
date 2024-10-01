<?php

namespace App\Http\Controllers;
use App\Models\buku;
use App\Models\Kode_kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = Siswa::query();
        
        if($request->input('search')){
            $query->where('nama', 'LIKE', '%'.$request->search.'%');
        }
        $siswa = $query->paginate(2)->appends($request->only('search'));
        return view('Master Data.data_siswa', [

            'data_siswa' => $siswa,
            'search'=>$request->search
        ]);
    }
    public function utama()
    {
        $siswa = Siswa::paginate(2);
        return view('siswa.edit_data', [
            'data_siswa' => $siswa
        ]);
    }
    
    public function tambah()
    {
        $kelases = Kode_kelas::all();
        return view('Tambah.tambah_data_siswa',[
            "kelases"=>$kelases
        ]);
    }
    public function tambah_data(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'max:13',
            'kode_kelas' => 'required',
        ],[
            'nis.required' => 'NISN harus diisi',
            'nama.required' => 'Nama harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'no_telp.max' => 'No. Telp tidak boleh lebih dari 13 digit',
            'kode_kelas.required' => 'Kelas harus diisi',
        ]);
        $siswa = new Siswa();
        $siswa->create($request->all());
        return redirect('/data_siswa');
    }
    public function edit($nis)
    {
        // Find the student data or fail if not found
        $siswa = Siswa::findOrFail($nis); 
        return view('Tambah.edit_data', ['d' => $siswa]);
    }
    
    public function update (Request $request,$nis){
        $data = Siswa::find($nis);
        $data->update ($request->all());

        return redirect('/data_siswa');
    }
    // delete
    public function delete($nis){
        $data = Siswa::find($nis);
        $data->delete();
        return redirect('/data_siswa');
    }
}
