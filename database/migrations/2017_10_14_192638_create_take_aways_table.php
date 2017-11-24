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
            $table->string('name',255);
            $table->time('opening_time');
            $table->time('closing_time');
            $table->string('website',255);
            $table->integer('mobile');
            $table->integer('phone');
            $table->string('email',255);
            // Endrecos dos Takeaways
            $table->string('road',255);
            $table->string('av',255);
           // $table->string('block',255);
            $table->string('province',255);
            $table->integer('number');
            $table->DECIMAL('lat',12,9);
            $table->DECIMAL('lng',12,9);
            $table->string('logo')->default('default.jpg');
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
