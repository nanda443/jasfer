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
        Schema::create('kameras', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('provider_id');
            $table->text('spesifikasi');
            $table->integer('harga');
            $table->text('foto');
            $table->json('foto_karya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kameras');
    }
};
