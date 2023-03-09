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
        Schema::create('kerusakans', function (Blueprint $table) {
            $table->id('id');
            $table->string('pelatnomor');
            $table->enum('jnskendaraan', ['mobil', 'motor']);
            $table->string('tipekendaraan', 45);
            $table->string('tahunkendaraan', 45);
            $table->text('fotokendaraan');
            $table->integer('idmember');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerusakans');
    }
};
