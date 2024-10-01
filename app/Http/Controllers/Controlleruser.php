<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class Controlleruser extends Controller
{
    public function index()
    {
        $Buku = new buku();
        return view(
            "User.Tampilan_user",
            [
                'buku' => $Buku->all()
            ]
        );
    }

    public function peminjaman($kode_Buku)
    {
        $Buku = new buku();
        return view(
            'halamanUtama.Pages.HalamanPeminjaman',
            [
                "peminjaman" => $Buku->find($kode_Buku)
            ]
        );
    }
}
