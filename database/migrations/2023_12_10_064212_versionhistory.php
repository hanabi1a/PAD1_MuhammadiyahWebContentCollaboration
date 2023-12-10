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
        Schema::create('version_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kajian_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->integer('version_number')->nullable();
            $table->string('file_path')->nullable();
            $table->string('commit_message')->nullable();
            $table->timestamps();

            // Tambahkan constraint foreign key jika diperlukan
            $table->foreign('kajian_id')->references('id')->on('kajian')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('version_history');
    }
};
