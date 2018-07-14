<?php

use Illuminate\Database\Seeder;

class TalkSubmissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 1; $i <= 15; $i++) {
            if($i % 2 == 0) {
                DB::table('talk_submissions')->insert([
                    'title' => 'Talk - ' .  $i,
                    'email' => str_random(6) . '@gmail.com',
                    'name' => str_random(10),
                    'abstract' => str_random(255)
                ]);
            } else {
                DB::table('talk_submissions')->insert([
                    'title' => 'Talk - ' .  $i,
                    'email' => str_random(6) . '@gmail.com',
                    'name' => str_random(10),
                    'abstract' => str_random(255),
                    'given' => 1,
                    'date_given' => date('Y-m-d')
                ]);
            }
        }
    }
}
