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
        Schema::create('service_orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_logged_id');
            $table->uuid('client_id')->nullable();
            $table->uuid('seating_id')->nullable();
            $table->decimal('total_price')->nullable();
            $table->enum('status', ['pending', 'paid', 'canceled'])->default('pending');
            $table->enum('type', ['ifood', 'manual'])->default('manual');
            $table->timestamps();

            $table->foreign('user_logged_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('seating_id')->references('id')->on('seatings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_orders');
    }
};