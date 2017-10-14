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
            $table->timestamps();
            $table->integer('address_id')->unsigned()->nullable(); //Foreign Key
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->integer('userlevel_id')->nullable(); //Foreign Key
            $table->foreign('userlevel_id')->references('id')->on('user_levels');
            $table->integer('contact')->nullable();
            $table->integer('phone')->nullable();
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
