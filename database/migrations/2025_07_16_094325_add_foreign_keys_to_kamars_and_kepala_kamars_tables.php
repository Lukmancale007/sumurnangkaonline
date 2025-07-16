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
        Schema::table('kamars', function (Blueprint $table) {
            $table->foreign('kepala_kamar_id')
                ->references('id')->on('kepala_kamars')
                ->onDelete('set null');
        });

        Schema::table('kepala_kamars', function (Blueprint $table) {
            $table->foreign('kamar_id')
                ->references('id')->on('kamars')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kamars', function (Blueprint $table) {
            $table->dropForeign(['kepala_kamar_id']);
        });

        Schema::table('kepala_kamars', function (Blueprint $table) {
            $table->dropForeign(['kamar_id']);
        });
    }
};
