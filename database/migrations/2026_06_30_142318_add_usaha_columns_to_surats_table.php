<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->string('jenis_usaha')->nullable()->after('jenis_surat');

            $table->text('alamat_usaha')->nullable()->after('jenis_usaha');

        });
    }

    public function down(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->dropColumn([
                'jenis_usaha',
                'alamat_usaha'
            ]);

        });
    }
};