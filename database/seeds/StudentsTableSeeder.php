<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'user_id' => 1,
            'std_status_id' => 1,
            'car_id' => 1,
            'school_id' => 1,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'โกญจนาท',
            'last_name' => 'เกษศิลป์',
            'nickname' => 'จ๋าย',
            'phone' => '0894888116',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
        ]);

        DB::table('students')->insert([
            'nickname' => 'จิน',
            // 'price' => 900,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อาย',
            // 'price' => 900,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1



        ]);

        DB::table('students')->insert([
            'nickname' => 'กาย',
            // 'price' => 900,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ฟ้าใส',
            // 'price' => 900,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ติว',
            // 'price' => 900,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนย',
            // 'price' => 900,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำฟ้า',
            // 'price' => 900,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แพรวา',
            // 'price' => 900,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ทิวทัศ',
            // 'price' => 900,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อิ๊ง',
            // 'price' => 900,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อัน',
            // 'price' => 900,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว',
            // 'price' => 900,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำฟ้า',
            // 'price' => 900,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กล้า',
            // 'price' => 900,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นวงบ์',
            // 'price' => 900,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โอ๊ต',
            // 'price' => 900,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กัณฑ์',
            // 'price' => 900,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มะขาม',
            // 'price' => 900,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว',
            // 'price' => 900,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว ช้าง',
            // 'price' => 900,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว ชาติ',
            // 'price' => 900,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เกรซ',
            // 'price' => 900,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'วิว',
            // 'price' => 900,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แตงโม',
            // 'price' => 900,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ผักหวาน',
            // 'price' => 900,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กล้า',
            // 'price' => 900,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โฟกัส',
            // 'price' => 900,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โปรแกรม',
            // 'price' => 900,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปันปัน',
            // 'price' => 900,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โอปอ',
            // 'price' => 900,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนส',
            // 'price' => 900,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เบ',
            // 'price' => 900,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'จักจั่น',
            // 'price' => 900,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไข่ต้ม',
            // 'price' => 900,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไข่ข้าว',
            // 'price' => 900,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปานเทพ',
            // 'price' => 900,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แบม',
            // 'price' => 900,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ป็อป',
            // 'price' => 700,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ครีม',
            // 'price' => 700,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'หมวย',
            // 'price' => 700,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ฟลุ๊ค',
            // 'price' => 650,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์ส',
            // 'price' => 650,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปุม',
            // 'price' => 650,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'นิคม',
            // 'price' => 650,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เกตุ',
            // 'price' => 650,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มาย (ซอย 6)',
            // 'price' => 650,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ก็อป (ซอย 6)',
            // 'price' => 650,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไอร์ (ซอย 5)',
            // 'price' => 650,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ก้อย',
            // 'price' => 650,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปุ้ม',
            // 'price' => 650,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'พอลล่า',
            // 'price' => 600,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กาย',
            // 'price' => 600,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ครีม',
            // 'price' => 600,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ดีบ',
            // 'price' => 600,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปลาย',
            // 'price' => 600,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์ส',
            // 'price' => 600,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปุ๊กปิ๊ก',
            // 'price' => 600,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปิงปอง',
            // 'price' => 600,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปลาย',
            // 'price' => 600,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'บีม',
            // 'price' => 600,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แจ้',
            // 'price' => 600,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เจ',
            // 'price' => 600,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'จูน',
            // 'price' => 600,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มิค',
            // 'price' => 600,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มาค',
            // 'price' => 600,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ใบเตย',
            // 'price' => 600,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'พลอย',
            // 'price' => 600,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไอโฟน',
            // 'price' => 600,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กอนเน่',
            // 'price' => 600,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แคลนอล',
            // 'price' => 600,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนย (เบาว่าน)',
            // 'price' => 600,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำทิพย์',
            // 'price' => 600,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ภา',
            // 'price' => 600,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์น',
            // 'price' => 600,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ตาล',
            // 'price' => 600,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แบม',
            // 'price' => 600,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำฝน',
            // 'price' => 600,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ทราย',
            // 'price' => 600,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์น',
            // 'price' => 500,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มาย',
            // 'price' => 500,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ชมพู่',
            // 'price' => 500,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แม็ค',
            // 'price' => 600,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนย',
            // 'price' => 500,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนม',
            // 'price' => 500,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ส้ม',
            // 'price' => 500,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ฝ้าย (หน้าวัด)',
            // 'price' => 500,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'นุ่น',
            // 'price' => 500,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้องส้มน้ำ',
            // 'price' => 500,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อะตอม',
            // 'price' => 500,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เชล',
            // 'price' => 500,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไตตัน',
            // 'price' => 500,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไตเติล',
            // 'price' => 500,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ลูกตาล',
            // 'price' => 500,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ตังตัง',
            // 'price' => 500,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กิ๊ฟ',
            // 'price' => 500,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มีน',
            // 'price' => 350,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เมต',
            // 'price' => 500,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'พลอย',
            // 'price' => 500,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กานิว',
            // 'price' => 500,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กำนัน',
            // 'price' => 500,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แมลงปอ',
            // 'price' => 500,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำ',
            // 'price' => 500,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'นาข้าว',
            // 'price' => 500,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มิว',
            // 'price' => 500,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โอ๋',
            // 'price' => 500,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อั๋น',
            // 'price' => 500,
            'district_id' => 2,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'บีม',
            // 'price' => 350,
            'district_id' => 3,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'เดียว',
            // 'price' => 350,
            'district_id' => 4,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'แนน',
            // 'price' => 350,
            'district_id' => 5,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'ป่าน',
            // 'price' => 350,
            'district_id' => 6,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'บอล',
            // 'price' => 350,
            'district_id' => 7,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'เตย',
            // 'price' => 350,
            'district_id' => 8,
            'card_id' => Str::random(8),
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'แจ๊',
            // 'price' => 350,
            'district_id' => 1,
            'card_id' => Str::random(8),
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);
    }
}
