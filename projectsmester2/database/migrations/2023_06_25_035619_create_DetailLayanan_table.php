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
        Schema::create('DetailLayanan', function (Blueprint $table) {
            $table->id();
            $table->string('pekerjaan');
            $table->integer('biaya');
            $table->integer('layanan_id')->references('id')->on('Layanan');
            $table->string('montir_id')->references('nama')->on('Montir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DetailLayanan');
    }
};
