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
            $table->timestamps();
            $table->string('name',255);
            $table->integer('user_id')->unsigned()->nullable(); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('price');
            $table->string('details');
            $table->integer('takeaway_id')->unsigned()->nullable(); 
            $table->foreign('takeaway_id')->references('id')->on('takeaways');
            $table->integer('state');
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
