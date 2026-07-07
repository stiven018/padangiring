<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->string('saksi1')->nullable();

            $table->string('saksi2')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('surats', function (Blueprint $table) {

            $table->dropColumn([
                'saksi1',
                'saksi2'
            ]);

        });
    }

};
