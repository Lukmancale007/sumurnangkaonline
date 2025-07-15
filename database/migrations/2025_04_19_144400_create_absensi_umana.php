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
        Schema::create('absensiumana', function (Blueprint $table) {
            $table->id();
            $table->string('nmr');
            $table->date('tanggal');
            $table->string('shift')->nullable();
            $table->timestamp('waktu');
            $table->foreign('nmr')->references('nmr')->on('umana')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

            Schema::dropIfExists('absensiumana');

    }
};
