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
        Schema::create('transactions', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement(); // Primary key
            $table->unsignedInteger('user_id')->nullable(); // Foreign key ke categories
            $table->foreign('user_id')
                ->references('id') // Relasi ke id_category di tabel categories
                ->on('users')
                ->cascadeOnDelete();
            $table->unsignedInteger('member_id')->nullable(); // Foreign key ke categories
            $table->foreign('member_id')
                ->references('id') // Relasi ke id_category di tabel categories
                ->on('members')
                ->cascadeOnDelete();
            $table->unsignedInteger('product_id')->nullable(); // Foreign key ke categories
            $table->foreign('product_id')
                ->references('id') // Relasi ke id_category di tabel categories
                ->on('products')
                ->cascadeOnDelete();
            $table->unsignedInteger('service_id')->nullable(); // Foreign key ke categories
            $table->foreign('service_id')
                ->references('id') // Relasi ke id_category di tabel categories
                ->on('services')
                ->cascadeOnDelete();
            $table->string('invoice')->unique();
            $table->string('plat_nomor');
            $table->string('jenis_kendaraan');
            $table->string('jenis_transaksi');
            $table->string('qty');
            $table->string('total');
            $table->string('bayar')->nullable();
            $table->string('kembalian')->nullable();
            $table->string('metode_bayar')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('nomor_rekening')->nullable();
            $table->string('nominal_debit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
