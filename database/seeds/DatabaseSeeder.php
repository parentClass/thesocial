<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('social_users')->insert([
          'first_name' => str_random(10),
          'last_name' => str_random(15),
          'email' => str_random(10).'@gmail.com',
          'password' => md5('secret'),
        ]);
    }
}
