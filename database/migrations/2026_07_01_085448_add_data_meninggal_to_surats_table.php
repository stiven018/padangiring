<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->string('nama_meninggal')->nullable();
            $table->string('jk_meninggal')->nullable();
            $table->string('tempat_lahir_meninggal')->nullable();
            $table->date('tanggal_lahir_meninggal')->nullable();
            $table->text('alamat_meninggal')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->dropColumn([
                'nama_meninggal',
                'jk_meninggal',
                'tempat_lahir_meninggal',
                'tanggal_lahir_meninggal',
                'alamat_meninggal'
            ]);

        });
    }
};