<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->unsignedBigInteger('Category_ID');  // Use the same name here
            $table->string('name');
            $table->string('product_desc');
            $table->decimal('price', 8, 2);
            $table->integer('piece');
            $table->string('image');
            $table->timestamps();
        
            $table->foreign('Category_ID')->references('Category_ID')->on('categories')->onDelete('cascade');  // Reference Category_ID
        });
        
    }

public function down()
    {
        Schema::dropIfExists('products');
    }

};



    
        
