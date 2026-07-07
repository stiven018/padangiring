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
        Schema::table('surats', function (Blueprint $table) {

            $table->date('tanggal_kematian')->nullable();

            $table->string('penyebab_kematian')->nullable();

            $table->string('tempat_kematian')->nullable();

            $table->string('nama_pelapor')->nullable();

            $table->string('jk_pelapor')->nullable();

            $table->string('ttl_pelapor')->nullable();

            $table->text('alamat_pelapor')->nullable();

            $table->string('hubungan_keluarga')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->dropColumn([
                'tanggal_kematian',
                'penyebab_kematian',
                'tempat_kematian',
                'nama_pelapor',
                'jk_pelapor',
                'ttl_pelapor',
                'alamat_pelapor',
                'hubungan_keluarga',
            ]);

        });
    }
};