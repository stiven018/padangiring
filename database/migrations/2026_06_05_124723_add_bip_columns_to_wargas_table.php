<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('wargas', function (Blueprint $table) {

            $table->string('no_kk')->nullable();

            $table->string('status_hubungan')->nullable();

            $table->string('pendidikan')->nullable();

            $table->string('nama_ayah')->nullable();

            $table->string('nama_ibu')->nullable();

            $table->string('rt')->nullable();

            $table->string('rw')->nullable();

            $table->string('dusun')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('wargas', function (Blueprint $table) {

            $table->dropColumn([
                'no_kk',
                'status_hubungan',
                'pendidikan',
                'nama_ayah',
                'nama_ibu',
                'rt',
                'rw',
                'dusun'
            ]);

        });
    }
};