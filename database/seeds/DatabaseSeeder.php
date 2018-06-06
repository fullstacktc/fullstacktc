<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Michael Akopov',
            'email' => 'makopov@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
