<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
             $table->string('nama');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('tipe_kendaraan');
            $table->string('plat_nomor');
            $table->string('atas_nama');
            $table->dateTime('jadwal_service');
            $table->string('tipe_service');
            $table->string('status');
            $table->text('keluhan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
