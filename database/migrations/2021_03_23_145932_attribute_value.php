<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AttributeValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_pure', function (Blueprint $table) {
            $table->bigInteger('attribute_id')->unsigned();
            $table->bigInteger('value_id')->unsigned();
            $table->unsignedBigInteger('pure_id');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('value_id')->references('id')->on('values')->onDelete('cascade');
            $table->foreign('pure_id')->references('id')->on('pures')->onDelete('cascade');
            $table->primary(['attribute_id','value_id','pure_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_product');
    }
}
