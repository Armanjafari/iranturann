<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('market_id');
            $table->unsignedBigInteger('pure_id');
            $table->foreign('market_id')->references('id')->on('markets')->onDelete('cascade');
            $table->foreign('pure_id')->references('id')->on('pures')->onDelete('cascade');
            
            $table->timestamps();
            $table->unique(['market_id' , 'pure_id']);
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
}
