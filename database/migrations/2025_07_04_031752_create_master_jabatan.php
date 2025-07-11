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
        Schema::create('master_jabatan', function (Blueprint $table) {
            $table->id('id_jabatan'); // primary key + auto increment
            $table->string('nama_jabatan');
            $table->unsignedBigInteger('id_bidang');

            // Foreign key constraints
            $table->foreign('id_bidang')->references('id_bidang')->on('master_bidang')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_jabatan');
    }
};
