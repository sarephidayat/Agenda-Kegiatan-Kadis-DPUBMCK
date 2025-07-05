<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('agenda_kadis', function (Blueprint $table) {
            //
            $table->string('softfile_surat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agenda_kadis', function (Blueprint $table) {
            //
            $table->dropColumn('softfile_surat');
        });
    }
};
