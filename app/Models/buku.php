<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'buku';
    protected $guarded = [];
    protected $primaryKey = 'kode_buku';

    public $incrementing = false;
}
