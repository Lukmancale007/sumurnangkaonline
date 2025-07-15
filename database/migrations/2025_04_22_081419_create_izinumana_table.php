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
        Schema::create('izinumana', function (Blueprint $table) {
            $table->id();
            $table->string('nmr');
            $table->date('tanggal');
            $table->string('shift'); // shift_1 atau shift_2
            $table->string('keterangan')->nullable(); // misal: "Sakit", "Izin keluarga"
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izinumana');
    }
};
