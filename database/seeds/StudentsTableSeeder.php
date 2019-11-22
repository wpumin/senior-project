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
            // 'lattitude' => '15.147868',
            // 'longtitude' => '99.672083',
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
        ]);

        DB::table('students')->insert([
            'user_id' => 4,
            'nickname' => 'จิน',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'user_id' => 4,
            'nickname' => 'อาย',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1



        ]);

        DB::table('students')->insert([
            'user_id' => 4,
            'nickname' => 'กาย',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ฟ้าใส',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ติว',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนย',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำฟ้า',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แพรวา',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ทิวทัศ',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อิ๊ง',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อัน',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำฟ้า',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กล้า',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นวงบ์',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โอ๊ต',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กัณฑ์',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มะขาม',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว ช้าง',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว ชาติ',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เกรซ',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'วิว',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แตงโม',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ผักหวาน',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กล้า',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โฟกัส',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โปรแกรม',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปันปัน',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โอปอ',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนส',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เบ',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'จักจั่น',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไข่ต้ม',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไข่ข้าว',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปานเทพ',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แบม',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ป็อป',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ครีม',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'หมวย',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ฟลุ๊ค',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์ส',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปุม',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'นิคม',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เกตุ',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มาย (ซอย 6)',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ก็อป (ซอย 6)',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไอร์ (ซอย 5)',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ก้อย',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปุ้ม',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'พอลล่า',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กาย',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ครีม',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ดีบ',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปลาย',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์ส',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปุ๊กปิ๊ก',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปิงปอง',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปลาย',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'บีม',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แจ้',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เจ',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'จูน',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มิค',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มาค',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ใบเตย',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'พลอย',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไอโฟน',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กอนเน่',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แคลนอล',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนย (เบาว่าน)',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำทิพย์',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ภา',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์น',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ตาล',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แบม',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำฝน',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ทราย',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์น',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มาย',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ชมพู่',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แม็ค',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนย',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนม',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ส้ม',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ฝ้าย (หน้าวัด)',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'นุ่น',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้องส้มน้ำ',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อะตอม',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เชล',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไตตัน',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไตเติล',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ลูกตาล',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ตังตัง',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กิ๊ฟ',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มีน',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เมต',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'พลอย',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กานิว',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'กำนัน',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แมลงปอ',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำ',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'นาข้าว',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มิว',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โอ๋',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อั๋น',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'บีม',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'เดียว',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'แนน',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'ป่าน',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'บอล',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'เตย',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'แจ๊',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => '',
            'first_name' => 'ยังไม่มีข้อมูล',
            'last_name' => '',
            'phone' => 'ยังไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);
    }
}
