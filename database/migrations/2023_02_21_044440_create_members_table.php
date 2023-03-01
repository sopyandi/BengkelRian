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
        Schema::create('members', function (Blueprint $table) {
            $table->id('idmember');
            $table->string('nama', 45);
            $table->string('nohp', 12);
            $table->string('email', 45);
            $table->string('nik', 45);
            $table->text('foto');
            $table->text('ktp');
            $table->text('alamat');
            $table->integer('idusers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
