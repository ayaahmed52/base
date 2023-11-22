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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('desc')->nullable();
            $table->string('price')->nullable();
            $table->double('rate')->nullable();
            $table->string('qty')->nullable();
            $table->enum('home' , ['true' , 'false'])->default('false');
            $table->enum('featured' , ['true' , 'false'])->default('false');
            $table->enum('gender' , ['all' , 'women' , 'men'])->default('all');
            $table->foreignId('brand_id')->nullable() ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
