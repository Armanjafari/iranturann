<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('market_name');
            $table->string('slug');
            $table->string('bank_number');
            $table->string('shaba_number');

            $table->boolean('is_super_active')->default(true);
            $table->boolean('is_active')->default(true);

            $table->string('instagram')->nullable();
            $table->integer('type')->comment('0:market,1:messenger');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markets');
    }
}
