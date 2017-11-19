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
            $table->integer('phone')->nullable();
            $table->string('password');
            $table->rememberToken();            
            $table->integer('userlevel_id')->unsigned(); //Foreign Key
            $table->foreign('userlevel_id')->references('id')->on('user_levels');


            //$table->integer('contact')->nullable();
            
            //Endereco
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
        Schema::dropIfExists('users');
    }
}
