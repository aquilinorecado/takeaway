<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();            
            $table->integer('userlevel_id')->unsigned(); //Foreign Key
            $table->foreign('userlevel_id')->references('id')->on('user_levels');


            //$table->integer('contact')->nullable();
            //$table->integer('phone')->nullable();
            //Endereco
            //$table->string('road',255);
            //$table->string('av',255);
            //$table->string('block',255);
            //$table->string('province',255);
            //$table->integer('number');
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
        Schema::dropIfExists('users');
    }
}
