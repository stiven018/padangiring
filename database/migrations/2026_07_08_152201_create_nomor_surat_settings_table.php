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
        Schema::create('nomor_surat_settings', function (Blueprint $table) {

            $table->id();

            // Nomor surat terakhir
            $table->integer('nomor_terakhir')->default(0);

            // Kode surat (misal 470)
            $table->string('kode_surat')->default('470');

            // Singkatan kelurahan
            $table->string('kode_kelurahan')->default('KLPD');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nomor_surat_settings');
    }
};
