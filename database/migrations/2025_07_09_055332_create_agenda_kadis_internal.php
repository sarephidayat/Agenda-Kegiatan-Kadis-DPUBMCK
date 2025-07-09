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
        Schema::create('agenda_kadis_internal', function (Blueprint $table) {
            $table->id(); // id (primary key + auto increment)

            $table->date('tanggal_surat');
            $table->string('no_surat');

            // Foreign key fields
            $table->unsignedBigInteger('id_bidang');

            $table->string('acara');
            $table->string('waktu');
            $table->string('tanggal');
            $table->string('tempat');
            $table->string('kepada');
            $table->text('catatan');
            $table->string('softfile_surat');

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_bidang')->references('id_bidang')->on('master_bidang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda_kadis_internal');
    }
};
