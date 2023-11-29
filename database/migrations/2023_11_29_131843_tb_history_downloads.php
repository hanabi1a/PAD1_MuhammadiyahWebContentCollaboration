<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class tbhistorydownloads extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('history_downloads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kajian_id');
            $table->timestamp('downloaded_at')->useCurrent(); // Gunakan waktu sekarang saat insert
            // Tambahkan foreign key ke tabel users dan kajians sesuai kebutuhan

            // Foreign key ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Foreign key ke tabel kajians (ganti 'kajians' dengan nama tabel kajian yang sesuai)
            $table->foreign('kajian_id')->references('id')->on('kajians')->onDelete('cascade');

            $table->timestamps(); // Opsional, tergantung kebutuhan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('history_downloads');
    }
}

