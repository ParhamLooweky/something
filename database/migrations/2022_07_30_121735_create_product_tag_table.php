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
        Schema::create('product_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('product_id');
            
            $table->foreign('tag_id')->
            on('tags')->
            references('id')->
            cascadeOnUpdate()->
            cascadeOnDelete();


            $table->foreign('product_id')->
            on('products')->
            references('id')->
            cascadeOnUpdate()->
            cascadeOnDelete();

            $table->primary(['tag_id','product_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_tags');
    }
};
