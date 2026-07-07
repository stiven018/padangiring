<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            // Data Orang Tua
            $table->string('nama_orangtua')->nullable();
            $table->string('tempat_lahir_orangtua')->nullable();
            $table->date('tanggal_lahir_orangtua')->nullable();
            $table->string('jenis_kelamin_orangtua')->nullable();
            $table->text('alamat_orangtua')->nullable();
            $table->string('pekerjaan_orangtua')->nullable();

            // Data Anak
            $table->string('nama_anak')->nullable();
            $table->string('tempat_lahir_anak')->nullable();
            $table->date('tanggal_lahir_anak')->nullable();
            $table->string('jenis_kelamin_anak')->nullable();
            $table->string('fakultas_jurusan')->nullable();
            $table->string('nim')->nullable();
            $table->text('alamat_anak')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->dropColumn([
                'no_hp_orangtua',
                'penghasilan_bulanan',
                'jumlah_tanggungan',
                'nama_anak',
                'tempat_lahir_anak',
                'tanggal_lahir_anak',
                'jenis_kelamin_anak',
                'fakultas_jurusan',
                'nim',
                'alamat_anak'
            ]);

        });
    }
};