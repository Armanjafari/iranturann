<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeildToOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('option_values', function (Blueprint $table) {
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('waranty_id');
            $table->foreign('waranty_id')->references('id')->on('waranties')->onDelete('cascade');
            $table->unique(['product_id' , 'color_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('option_values', function (Blueprint $table) {
            //
        });
    }
}
