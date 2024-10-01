<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) { 
            $table->integer('kode_buku')->primary(); 
            $table->string('judul');
            $table->string('penerbit');
            $table->year('tahun_terbit');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     
     */
    public function down(): void
    {
        Schema::dropIfExists('buku'); 
    }
};
