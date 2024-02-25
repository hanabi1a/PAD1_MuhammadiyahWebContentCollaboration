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
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('id_file_kajian')->nullable();
            $table->string('pemateri')->nullable();
            $table->string('judul_kajian')->nullable();
            $table->string('file_kajian')->nullable();
            $table->string('deskripsi_kajian')->nullable();
            $table->date('tanggal_postingan')->nullable();
            $table->string('lokasi_kajian')->nullable();
            $table->string('keyword_kajian')->nullable();
            $table->string('foto_kajian')->nullable();

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
