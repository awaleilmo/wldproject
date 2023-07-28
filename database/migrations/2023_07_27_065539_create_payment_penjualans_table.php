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
        Schema::create('payment_penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('nomorInvoice');
            $table->integer('pembayaran');
            $table->string('jenisPembayaran');
            $table->string('buktiPembayaran');
            $table->string('namaPembayar');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_penjualans');
    }
};
