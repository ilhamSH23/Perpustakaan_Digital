<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'nis';

    public $incrementing = false;

    public function Siswa()
    {
        return $this->hasMany(Kode_kelas::class, 'kode_kelas', 'kode_kelas');
    }
}
