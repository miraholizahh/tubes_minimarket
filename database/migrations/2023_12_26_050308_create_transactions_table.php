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
            $table->id();
            $table->date('tanggal_transaksi');
            $table->unsignedBigInteger('id_produk');
            $table->decimal('harga',10,2);
            $table->integer('jumlah');
            $table->decimal('total_harga', 10, 2);
            $table->decimal('bayar', 10, 2);
            $table->decimal('kembalian', 10,2);
            $table->timestamps();

            $table->foreign('id_produk')
            ->references('id')
            ->on('products')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
