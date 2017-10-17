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
        $this->call(UsersTableSeeder::class);
     	//$this->call(userSeeder::class);
    }
}

class userSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	['name' => str_random(8),'email' => str_random(3).'@gmail.com','password' =>bcrypt('123456')],
        	['name' => str_random(8),'email' => str_random(3).'@gmail.com','password' =>bcrypt('123456')],
        	['name' => str_random(8),'email' => str_random(3).'@gmail.com','password' =>bcrypt('123456')]
        ]);
    }
}