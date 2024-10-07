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
        Schema::create('responden', function (Blueprint $table) {
            $table->id();
            $table->string('responden');
            $table->integer('nama_poliklinik');
            $table->integer('nama_dokter');
            $table->string('nama_pasien');
            $table->string('no_telp');
            $table->text('kritik_saran');
            $table->integer('kd_responden');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respondens');
    }
};
