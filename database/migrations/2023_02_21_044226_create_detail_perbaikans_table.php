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
        Schema::create('detail_perbaikans', function (Blueprint $table) {
            $table->id('iddetailPerbaikan');
            $table->string('jenisperbaikan', 45);
            $table->string('nominal', 45);
            $table->text('keterangan');
            $table->integer('idperbaikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_perbaikans');
    }
};
