<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeildToPureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pures', function (Blueprint $table) {
            $table->integer('status')->default(1);
            $table->integer('weight')->nullable();
            $table->string('title')->nullable()->change();
            $table->string('persian_title')->nullable()->change();
            $table->string('slug')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->integer('price')->nullable()->change();
            $table->unsignedBigInteger('brand_id')->nullable()->change();
            $table->unsignedBigInteger('category_id')->nullable()->change();
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
            $table->dropColumn('status');
            $table->dropColumn('weight');

        });
    }
}