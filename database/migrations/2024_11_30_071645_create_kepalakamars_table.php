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
        Schema::create('kepalakamars', function (Blueprint $table) {
         $table->id();
        $table->unsignedBigInteger('asrama_id');
        $table->string('kepalakamar');
        $table->foreign('asrama_id')->references('id')->on('asramas')->onDelete('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepalakamars');
    }

};
