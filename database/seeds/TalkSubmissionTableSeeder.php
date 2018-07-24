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
        DB::table('talk_submissions')->insert([
            'title' => 'Talk with no user or video',
            'email' => str_random(6) . '@gmail.com',
            'name' => str_random(10),
            'abstract' => str_random(255),
            'given' => 1,
            'date_given' => date('Y-m-d'),
            'video_url' => ''
        ]);

        for($i = 1; $i <= 15; $i++) {
            if($i % 2 == 0) {
                DB::table('talk_submissions')->insert([
                    'title' => 'Talk - ' .  $i,
                    'email' => str_random(6) . '@gmail.com',
                    'name' => str_random(10),
                    'abstract' => str_random(255),
                    'video_url' => 'https://youtube.com/'
                ]);
            } else {
                DB::table('talk_submissions')->insert([
                    'title' => 'Talk - ' .  $i,
                    'email' => str_random(6) . '@gmail.com',
                    'name' => str_random(10),
                    'abstract' => str_random(255),
                    'given' => 1,
                    'date_given' => date('Y-m-d'),
                    'user_id' => 1,
                    'video_url' => 'https://youtube.com/'
                ]);
            }
        }
    }
}
