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
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            // $table->integer('nis')->default(2020010001);
            $table->string('nis')->unique();
            $table->string('gender');
            $table->timestamps();
            $table->string('image');
            $table->string('nama');
            $table->string('tanggal_lahir');
            $table->foreignId('kamar_id')->constrained()->onDelete('cascade');
            $table->string('alamat');
            $table->string('ayah');
            $table->string('ibu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
