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
        Schema::create('data_ibus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->text('alamat');
            $table->integer('provinsi_id');
            $table->integer('kota_id');
            $table->integer('kecamatan_id');
            $table->integer('desa_id');
            $table->integer('posyandu_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ibus');
    }
};
