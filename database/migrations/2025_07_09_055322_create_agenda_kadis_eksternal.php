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
        Schema::create('agenda_kadis_eksternal', function (Blueprint $table) {
            $table->id(); // id (primary key + auto increment)

            $table->date('tanggal_surat');
            $table->string('no_surat');
            $table->string('pengundang');
            $table->string('tempat');
            $table->string('tanggal');

            // Foreign key fields
            $table->unsignedBigInteger('id_bidang');
            $table->unsignedBigInteger('id_jabatan');
            $table->unsignedBigInteger('id_instruksi');

            $table->string('acara');
            $table->string('waktu');
            $table->string('nama_pendamping');
            $table->text('catatan');
            $table->string('softfile_surat');

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_bidang')->references('id_bidang')->on('master_bidang')->onDelete('cascade');
            $table->foreign('id_jabatan')->references('id_jabatan')->on('master_jabatan')->onDelete('cascade');
            $table->foreign('id_instruksi')->references('id_instruksi')->on('master_instruksi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda_kadis_eksternal');
    }
};
