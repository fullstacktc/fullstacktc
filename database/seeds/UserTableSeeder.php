<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Michael Akopov',
            'username' => 'makopov',
            'bio' => str_random(800),
            'email' => 'makopov@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Kevin Haro',
            'username' => 'kharo',
            'bio' => str_random(500),
            'email' => 'k.haro@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'kumar',
            'username' => 'kumar',
            'bio' => str_random(800),
            'email' => 'kumar@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'harold',
            'username' => 'harold',
            'bio' => str_random(500),
            'email' => 'harold@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'bob',
            'username' => 'bob',
            'bio' => str_random(800),
            'email' => 'BOB@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'fred',
            'username' => 'fred',
            'bio' => str_random(500),
            'email' => 'fred@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
