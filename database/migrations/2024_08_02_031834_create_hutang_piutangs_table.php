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
        Schema::create('hutang_piutangs', function (Blueprint $table) {
            $table->id();
            $table->date('jatuh_tempo');
            $table->string('pihak_kedua');
            $table->integer('nominal');
            $table->enum('status',['belum_dibayar','sudah_dibayar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hutang_piutangs');
    }
};
