<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeildToPuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pures', function (Blueprint $table) {
            $table->unsignedBigInteger('market_id')->nullable();
            $table->foreign('market_id')->references('id')->on('markets')->onUpdate('cascade');
            $table->text('keywords')->nullable();
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
            $table->dropForeign('market_id');
            $table->dropColumn('market_id');
            $table->dropColumn('keywords');
        });
    }
}
