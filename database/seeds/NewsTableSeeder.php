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
            'user_id' => '69',
            'news_statuses_id' => '1',
            'role_id' => '1',
            'title' => 'ทดสอบระบบเว็บไซต์ bear-bus ได้ภายในวันนี้',
            'content' => 'เปิดการใช้งานเว็บไซต์ bear-bus ให้สมาชิกทุกคนได้ทดลองใช้ระบบเว็บไซต์ที่สร้างมาเพื่ออำนวยความสะดวกให้ผู้ปกครองทุกคน',
            'image' => 'images/internal/banner/news.jpg',
            'release_date' => '16/11/2562',
            'release_time' => '10:52 PM',
            'news_at' => '16/11/2562',
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('news')->insert([
            'user_id' => '69',
            'news_statuses_id' => '1',
            'role_id' => '2',
            'title' => 'ประกาศขึ้นราคาค่ารถภายใน 19 พ.ย. 2562 ',
            'content' => 'ภายในวันที่ 19 พฤศจิกายน 2562 จะมีการขึ้นราคาค่ารถรับ-ส่งนักเรียนของคณะชาวเกษศิลป์โดยราคาจะถูกปรับอัตราเพิ่มขึ้น 50 บาทในทุกพื้นที่การเดินทาง',
            'image' => 'images/internal/banner/brick.jpg',
            'release_date' => '15/11/2562',
            'release_time' => '10:57 PM',
            'news_at' => '18/11/2562',
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('news')->insert([
            'user_id' => '69',
            'news_statuses_id' => '1',
            'role_id' => '1',
            'title' => 'เปลี่ยนแปลงเส้นทาง 24 พฤศจิกายนนี้',
            'content' => 'ภายในวันที่ 24 พฤศจิกายน 2562 จะมีการเปลี่ยนเส้นทางในการเดินทางโดยจะมีการใช้เส้นทางอำเภอ หนองขาหย่าง เพิ่มอีก 1 เส้นทาง',
            'image' => 'images/internal/banner/route.jpg',
            'release_date' => '20/11/2562',
            'release_time' => '11:04 PM',
            'news_at' => '22/11/2562',
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('news')->insert([
            'user_id' => '69',
            'news_statuses_id' => '1',
            'role_id' => '2',
            'title' => 'เพิ่มที่นั่งในรถโดยสารรับ-ส่งนักเรียน',
            'content' => 'รถรับ-ส่งนักเรียนชาวคณะเกษศิลป์ได้มีการเพิ่มจำนวนที่นั่งของนักเรียนให้มีการรองรับเด็กนักเรียนได้มากขึ้น',
            'image' => 'images/internal/banner/seat_bus.jpg',
            'release_date' => '16/11/2562',
            'release_time' => '11:08 PM',
            'news_at' => '16/11/2562',
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('news')->insert([
            'user_id' => '69',
            'news_statuses_id' => '1',
            'role_id' => '1',
            'title' => 'โปรโมชันพิเศษ',
            'content' => 'Truemove h ได้เพิ่มโปรโมชันเพียงใช้ true สามารถลดค่าโดยสารรถทันที เดือนละ 200 บาท ',
            'image' => 'images/internal/banner/true.jpg',
            'release_date' => '16/11/2562',
            'release_time' => '11:08 PM',
            'news_at' => '16/11/2562',
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
