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
        Schema::create('payment_service_orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('service_order_id')->index();
            $table->string('transaction_id', 40)->nullable();
            $table->decimal('amount');
            $table->enum('method', ['credit_card', 'bank_slip', 'debit_card', 'pix', 'transfer', 'ifood']);
            $table->enum('status', ['pending', 'canceled', 'paid'])->default('pending');
            $table->timestamps();

            $table->foreign('service_order_id')->references('id')->on('service_orders');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_service_orders');
    }
};
