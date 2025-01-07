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
            $table->id('order_id');
            $table->unsignedBigInteger('user_id'); // Add this column
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('color_id');
            $table->integer('quantity');
            $table->timestamps();
        
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); // Foreign key constraint
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->foreign('color_id')->references('color_id')->on('colors')->onDelete('cascade');
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
