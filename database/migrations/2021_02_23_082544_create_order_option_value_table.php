<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderOptionValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_optionvalue', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('optionvalue_id')->unsigned();
            $table->integer('quantity');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('optionvalue_id')->references('id')->on('option_values')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
