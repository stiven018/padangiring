<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->string('nama_pewaris')->nullable();

            $table->enum('status_pewaris', [
                'Alm.',
                'Almh.'
            ])->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->dropColumn([
                'nama_pewaris',
                'status_pewaris'
            ]);

        });
    }
};