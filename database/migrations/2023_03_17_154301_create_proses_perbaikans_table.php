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
        Schema::create('proses_perbaikans', function (Blueprint $table) {
            $table->id('id');
            $table->dateTime('tanggal');
            $table->enum('statusperbaikan', ['pencairan', 'proses', 'selesai']);
            $table->enum('statuspembayaran', ['belum bayar', 'sudah bayar']);
            $table->integer('idmekanik');
            $table->integer('idkerusakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proses_perbaikans');
    }
};
