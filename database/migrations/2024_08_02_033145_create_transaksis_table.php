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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah');
            $table->enum('jenis_transaksi',['pemasukan','pengeluaran']);
            $table->string('keterangan');
            $table->enum('metode_pembayaran',['via_dana','antar_bank']);
            $table->unsignedBigInteger('id_event'); // Menambahkan kolom id_event
            $table->foreign('id_event')->references('id')->on('events')->onDelete('cascade'); // Mendefinisikan foreign key
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
