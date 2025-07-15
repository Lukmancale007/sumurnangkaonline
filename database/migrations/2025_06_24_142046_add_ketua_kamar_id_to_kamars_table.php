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
    Schema::table('kamars', function (Blueprint $table) {
        $table->unsignedBigInteger('ketua_kamar_id')->nullable()->after('nama_kamar');
        $table->foreign('ketua_kamar_id')->references('id')->on('santris')->onDelete('set null');
    });
}

public function down(): void
{
    Schema::table('kamars', function (Blueprint $table) {
        $table->dropForeign(['ketua_kamar_id']);
        $table->dropColumn('ketua_kamar_id');
    });
}
};
