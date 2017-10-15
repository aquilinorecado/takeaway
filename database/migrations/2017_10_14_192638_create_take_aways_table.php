<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakeAwaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_aways', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('address_id')->unsigned(); //Foreign Key
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->integer('categorie_id')->unsigned(); //Foreign Key
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->integer('user_id')->unsigned(); //Foreign Key
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('typeofpayment_id')->unsigned(); //Foreign Key
            $table->foreign('typeofpayment_id')->references('id')->on('type_of_payments');
            $table->integer('name');
            $table->time('opening_time');
            $table->time('closing_time');
            $table->string('website',255);
            $table->integer('contact');
            $table->integer('phone');
            $table->string('gmap',255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('take_aways');
    }
}
