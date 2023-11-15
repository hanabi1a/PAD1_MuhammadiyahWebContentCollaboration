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
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nama');
            $table->string('nomor_keanggotaan');
            $table->string('foto_kta');
            $table->string('foto_profile');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('cabang');
            $table->string('daerah');
            $table->string('wilayah');
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
