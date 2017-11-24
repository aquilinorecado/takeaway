<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name',255);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('price');
            $table->string('details');
            $table->integer('take_away_id')->unsigned();
            $table->foreign('take_away_id')->references('id')->on('take_aways');
            $table->string('tags');
            $table->integer('state');
            $table->string('image1')->default('default.jpg');
            $table->string('image2')->default('default.jpg');
            $table->string('image3')->default('default.jpg');
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
        Schema::dropIfExists('products');
    }
}
