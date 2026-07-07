<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ahli_waris_details', function (Blueprint $table) {

            $table->id();

            $table->foreignId('surat_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('nama');

            $table->string('nik');

            $table->date('tanggal_lahir');

            $table->string('hubungan');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ahli_waris_details');
    }
};