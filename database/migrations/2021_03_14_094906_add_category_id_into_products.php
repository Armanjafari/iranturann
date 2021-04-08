<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdIntoProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pures', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after('id');
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pures', function (Blueprint $table) {
            //
        });
    }
}
