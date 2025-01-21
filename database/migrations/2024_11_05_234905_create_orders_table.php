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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('account_id')->index();
            $table->uuid('environment_id')->nullable();
            $table->uuid('seating_id')->nullable();
            $table->uuid('product_id');
            $table->string('observations')->nullable();
            $table->integer('quantity');
            $table->enum('status', ['preparing', 'finished'])->default('preparing');
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('environment_id')->references('id')->on('environments');
            $table->foreign('seating_id')->references('id')->on('seatings');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
