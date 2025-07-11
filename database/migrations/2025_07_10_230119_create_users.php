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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user'); // Primary key + auto increment
            $table->string('username');
            $table->string('name');
            $table->string('password');


            // Foreign key fields
            $table->unsignedBigInteger('id_bidang');
            $table->unsignedBigInteger('id_jabatan');

            // Foreign key constraints
            $table->foreign('id_bidang')->references('id_bidang')->on('master_bidang')->onDelete('cascade');
            $table->foreign('id_jabatan')->references('id_jabatan')->on('master_jabatan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
