<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kajian', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('id_file_kajian');
            $table->string('pemateri');
            $table->string('judul_kajian');
            $table->string('file_kajian');
            $table->string('deskripsi_kajian');
            $table->date('tanggal_postingan');
            $table->string('lokasi_kajian');
            $table->string('keyword_kajian');
            $table->string('foto_kajian')->nullable();

            // Menambahkan foreign key ke tabel 'user'
            // $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kajian');
    }
};
