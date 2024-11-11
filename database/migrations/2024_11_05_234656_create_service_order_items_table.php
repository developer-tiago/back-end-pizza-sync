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
        Schema::create('service_order_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('service_order_id');
            $table->uuid('product_id');
            $table->integer('quantity');
            $table->decimal('unit_price');
            $table->decimal('total_price');
            $table->decimal('discount');
            $table->string('observation')->nullable();
            $table->timestamps();

            $table->foreign('service_order_id')->references('id')->on('service_orders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_order_items');
    }
};
