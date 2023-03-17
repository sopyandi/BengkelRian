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
            $table->id('id');
            $table->string('nama', 45)->nullable();
            $table->string('nohp', 12)->nullable();
            $table->integer('saldo')->nullable();
            $table->string('email', 45)->nullable();
            $table->string('nik', 45)->nullable();
            $table->text('foto')->nullable();
            $table->text('ktp')->nullable();
            $table->text('alamat')->nullable();
            $table->foreignId('user_id')->nullable();
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
