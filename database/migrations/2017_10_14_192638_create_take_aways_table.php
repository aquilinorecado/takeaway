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
            $table->integer('user_id')->unsigned(); //Foreign Key
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->time('opening_time');
            $table->time('closing_time');
            $table->string('website',255);
            $table->integer('contact');
            $table->integer('phone');
            $table->string('gmap',255);
            // Endrecos dos Takeaways
            $table->string('road')->default('None');
            $table->string('av')->default('None');
            $table->string('block')->default('None');
            $table->string('province')->default('None');
            $table->integer('number')->default('0');
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
        Schema::dropIfExists('take_aways');
    }
}
