<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function(Blueprint $table){
            $table->id();  // Ini akan membuat kolom id yang otomatis bertambah
            $table->string('username')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('nama')->nullable();
            $table->string('nomor_keanggotaan')->nullable();
            $table->string('foto_kta')->nullable();
            $table->string('foto_profile')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('cabang')->nullable();
            $table->string('daerah')->nullable();
            $table->string('wilayah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
