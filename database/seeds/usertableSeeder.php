<?php

use Illuminate\Database\Seeder;

class usertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
          'name' => 'jorge quinarivo',
          'email' => 'joquinarivo@gmail.com',
          'password' => 824123772 
      ]);
    	DB::table('users')->insert([
          'name' => 'jorge',
          'email' => 'maputo@gmail.com',
          'password' => 847182016
      ]);
        //
    }
}
