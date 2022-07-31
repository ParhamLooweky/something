<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('label');
            $table->decimal('price',20,2);
            $table->integer('count');
            $table->string('description');
            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamps();
            
            
            $table->foreign('discount_id')->on('discounts')->references('id')->nullOnDelete()->cascadeOnUpdate();
            
            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnUpdate()->cascadeOnDelete();
        
        
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
