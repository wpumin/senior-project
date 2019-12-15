<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'user_id' => '1',
            'news_statuses_id' => '1',
            'role_id' => '1',
            'title' => 'ปัญหาครอบครัว',
            'content' => 'แม่ส่งอีเมลล์บอกลูกชายชั้น 2 ให้ลงมากินข้าวชั้นล่าง',
            'image' => 'images/Users/moss2.jpg',
            'release_date' => '15/12/2562',
            'release_time' => '12:20 PM',
            'news_at' => '26/11/2562',
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
