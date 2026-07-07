<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->string('nama_orangtua')->nullable()->after('alamat_anak');

            $table->string('tempat_lahir_orangtua')->nullable();

            $table->date('tanggal_lahir_orangtua')->nullable();

            $table->string('jenis_kelamin_orangtua')->nullable();

            $table->text('alamat_orangtua')->nullable();

            $table->string('pekerjaan_orangtua')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->dropColumn([
                'nama_orangtua',
                'tempat_lahir_orangtua',
                'tanggal_lahir_orangtua',
                'jenis_kelamin_orangtua',
                'alamat_orangtua',
                'pekerjaan_orangtua'
            ]);

        });
    }
};