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
        Schema::create('jadwal_shift', function (Blueprint $table) {
            $table->id();
            $table->string('nmr');
            $table->string('hari'); // misal: Senin, Selasa, dst
            $table->string('shift'); // shift_1 atau shift_2
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
