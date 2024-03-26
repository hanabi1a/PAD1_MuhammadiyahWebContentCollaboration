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
        Schema::create('relasi_topik_kajian', function(Blueprint $table){
            $table->id();
            $table->foreign('kajian_id')
                ->references('id')
                ->on('kajian')
                ->onDelete('cascade');
            $table->foreign('topik_kajian_id')
                ->references('id')
                ->on('topik_kajian')
                ->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relasi_topik_kajian');
    }
};
