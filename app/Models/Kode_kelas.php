<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kode_kelas extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_kelas';
    protected $keyType = 'string';
    protected $table = "kelas";
    public function kelasLain()
    {
        return $this->hasMany(Kode_kelas::class, 'kode_kelas', 'kode_kelas');
    }
}
