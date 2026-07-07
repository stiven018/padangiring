<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->string('no_hp')->nullable();

            $table->string('jenis_upacara')->nullable();

            $table->string('hari_pelaksanaan')->nullable();

            $table->string('tanggal_pelaksanaan')->nullable();

            $table->text('tempat_pelaksanaan')->nullable();

            $table->string('agama_upacara')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->dropColumn([
                'no_hp',
                'jenis_upacara',
                'hari_pelaksanaan',
                'tanggal_pelaksanaan',
                'tempat_pelaksanaan',
                'agama_upacara'
            ]);

        });
    }
};