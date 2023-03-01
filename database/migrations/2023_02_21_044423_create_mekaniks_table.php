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
        Schema::create('mekaniks', function (Blueprint $table) {
            $table->id('idmekanik');
            $table->string('nama', 45);
            $table->text('alamat');
            $table->enum('statusAktivasi', ['1', '0']);
            $table->integer('idmember');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mekaniks');
    }
};
