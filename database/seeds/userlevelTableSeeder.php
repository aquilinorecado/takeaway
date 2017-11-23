<?php

use Illuminate\Database\Seeder;

class userlevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_levels')->insert([
          'description' => 'administrador',
          'state' => 1
      ]);
      DB::table('user_levels')->insert([
          'description' => 'cliente',
          'state' => 1
      ]);
    }
}
