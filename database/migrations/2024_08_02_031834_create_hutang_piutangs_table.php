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
            $table->string('nama_event');
            $table->date('jatuh_tempo_hutang_piutang');
            $table->string('pihak_kedua_hutang_piutang');
            $table->bigInteger('nominal_hutang_piutang');
            $table->enum('status_hutang_piutang',['belum_dibayar','sudah_dibayar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hutang_piutang');
    }
};
