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
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedBigInteger('kajian_id');
            $table->foreign('kajian_id')
                ->references('id')
                ->on('kajian')
                ->onDelete('cascade');
            $table->timestamp('downloaded_at')->useCurrent(); // Gunakan waktu sekarang saat insert

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
