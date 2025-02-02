<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('kelas', function (Blueprint $table) { 
            $table->string('kode_kelas')->primary();
            $table->string('tingkat');
            $table->string('jurusan');
            $table->timestamp('created_at')->nullable();
        });
    }

    /*
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas'); 
    }
};
