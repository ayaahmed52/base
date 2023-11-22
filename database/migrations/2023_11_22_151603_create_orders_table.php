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
            $table->id();
            $table->foreignId('user_id')->nullable() ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('product_price')->nullable();
            $table->string('delivery_price')->nullable();
            $table->string('total_price')->nullable();
            $table->string('deliver_lat')->nullable();
            $table->string('deliver_long')->nullable();
            $table->string('deliver_address')->nullable();
            $table->enum('payment_type' , ['cash' , 'online' , 'wallet'])->default('wallet');
            $table->timestamps();
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
