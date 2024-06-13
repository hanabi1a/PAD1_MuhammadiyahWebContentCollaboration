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
        Schema::table('version_history', function (Blueprint $table) {
            if (!Schema::hasColumn('version_history', 'old_kajian_id')) {
                $table->unsignedBigInteger('old_kajian_id');
                $table->foreign('old_kajian_id')
                    ->references('id')
                    ->on('kajian')
                    ->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::table('version_history', function (Blueprint $table) {
            if (Schema::hasColumn('version_history', 'old_kajian_id')) {
                $table->dropForeign(['old_kajian_id']);
                $table->dropColumn('old_kajian_id');
            }
        });
    }
};
