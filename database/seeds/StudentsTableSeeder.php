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
            'nickname' => 'จ๋าย',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'มนิศรา',
            'last_name' => 'เกตุวิริยกรรม',
            'phone' => '0613677784',
            'car_id' => 1,
            'std_status_id' => 1,
            'school_id' => 1,
            'image' => 'images/Students/จ๋าย_คันที่1.jpg',
            'user_id' => 1,
            'school_id' => 1
        ]);

        DB::table('students')->insert([
            'nickname' => 'จิน',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'วิจตรา',
            'last_name' => '',
            'phone' => '0962671271',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 1,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'อาย',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'สุภัทรตรี',
            'last_name' => '',
            'phone' => '0961270710',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 2,
            'school_id' => 2
        ]);

        DB::table('students')->insert([
            'nickname' => 'มารุ',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ธมลวรรณ',
            'last_name' => '',
            'phone' => '0961270710',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 2,
            'school_id' => 2
        ]);

        DB::table('students')->insert([
            'nickname' => 'กาย',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'อนุพงศ์',
            'last_name' => '',
            'phone' => '0951270923',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 3,
            'school_id' => 3
        ]);

        DB::table('students')->insert([
            'nickname' => 'ฟ้าใส',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'นฤมล',
            'last_name' => '',
            'phone' => '0631276790',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 3,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'ติว',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'สุชาติ',
            'last_name' => '',
            'phone' => '0657890021',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 4,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนย',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'นรินทร์',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 4,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำฟ้า',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ลินลภัส',
            'last_name' => '',
            'phone' => '0689017891',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 5,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'แพรวา',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'สุภาวดี',
            'last_name' => '',
            'phone' => '0891261090',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 5,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ทิวทัศ',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'นครินรทร์',
            'last_name' => '',
            'phone' => '0892216018',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 6,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'อิ๊ง',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'สุวดี',
            'last_name' => '',
            'phone' => '0800010020',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 6,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'อัน',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'อัญชลี',
            'last_name' => '',
            'phone' => '0915600021',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 7,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'จิรายุ',
            'last_name' => '',
            'phone' => '0891238911',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 7,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำฟ้า',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ยานิศา',
            'last_name' => '',
            'phone' => '0610035670',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 8,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'กล้า',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'บดินทร์',
            'last_name' => '',
            'phone' => '0626120902',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 8,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นวงบ์',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'ภานุวัฒน์',
            'last_name' => '',
            'phone' => '0891261290',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 9,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'โอ๊ต',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'ภควัต',
            'last_name' => '',
            'phone' => '0992461095',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 9,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'กัณฑ์',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'หิรัญ',
            'last_name' => '',
            'phone' => '0800191251',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 10,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มะขาม',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'ลาพิศ',
            'last_name' => '',
            'phone' => '0982619901',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 10,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'พรนิภา',
            'last_name' => '',
            'phone' => '0988795702',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 11,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว ช้าง',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'สาวิตรี',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 11,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ต้นข้าว ชาติ',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'กิติพงษ์',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 12,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'เกรซ',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ดารุนี',
            'last_name' => '',
            'phone' => '0621260982',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 12,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'วิว',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'วิทวัส',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 13,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แตงโม',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ลลิตา',
            'last_name' => '',
            'phone' => '0891236198',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 13,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ผักหวาน',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ภาวิณี',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 14,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'กล้า',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'ธนากร',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 14,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'โฟกัส',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ธิดา',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 15,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'โปรแกรม',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'สรวิศ',
            'last_name' => '',
            'phone' => '0613622612',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 15,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปันปัน',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ภูรินทร์',
            'last_name' => '',
            'phone' => '0621236972',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 16,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'โอปอ',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ปธิตา',
            'last_name' => '',
            'phone' => '0616116127',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 16,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนส',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'สถาพร',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 17,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'เบ',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ปวีณา',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 17,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'จักจั่น',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'กชกร',
            'last_name' => '',
            'phone' => '0898998921',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 18,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไข่ต้ม',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'กาวิน',
            'last_name' => '',
            'phone' => '0891236187',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 18,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไข่ข้าว',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'พานุพงษ์',
            'last_name' => '',
            'phone' => '0871236661',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 19,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปานเทพ',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'วิกร',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 19,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'แบม',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'อรอนงค์',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 20,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ป็อป',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ยานิษา',
            'last_name' => '',
            'phone' => '0891267192',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 20,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ครีม',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'พาวิณี',
            'last_name' => '',
            'phone' => '0661269891',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 21,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'หมวย',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ปวีณา',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 21,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ฟลุ๊ค',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'สรวิศ',
            'last_name' => '',
            'phone' => '0894761691',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 22,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์ส',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'สรวิศ',
            'last_name' => '',
            'phone' => '0678176123',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 22,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปุม',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'ธัญรัตน์',
            'last_name' => '',
            'phone' => '0891261879',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 23,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'นิคม',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'นิคม',
            'last_name' => '',
            'phone' => '0882316891',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 23,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เกต',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'เกษณี',
            'last_name' => '',
            'phone' => '0941168282',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 24,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'มาย (ซอย 6)',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'เมธาพร',
            'last_name' => '',
            'phone' => '0851619904',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 24,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ก็อป (ซอย 6)',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'กษิดิฐ',
            'last_name' => '',
            'phone' => '0891257126',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 25,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไอร์ (ซอย 5)',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'การุณ',
            'last_name' => '',
            'phone' => '0905612950',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 25,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ก้อย',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'วชิร',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 26,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปุ้ม',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'สาวิตรี',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 26,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'พอลล่า',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'เมษณี',
            'last_name' => '',
            'phone' => '0951267890',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 27,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'กาย',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'ชัชวัฎฐ์',
            'last_name' => '',
            'phone' => '0951267801',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 27,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'ครีม',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'รินรดา',
            'last_name' => '',
            'phone' => '0957820093',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 28,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ดีบ',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'ปกรณ์',
            'last_name' => '',
            'phone' => '0956700021',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 28,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปลาย',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ปวีณา',
            'last_name' => '',
            'phone' => '0961122620',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 29,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์ส',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'ณัฐวุฒิ',
            'last_name' => '',
            'phone' => '0951236712',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 29,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปุ๊กปิ๊ก',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'พาวิณี',
            'last_name' => '',
            'phone' => '0812300045',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 30,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปิงปอง',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'สุภัทร',
            'last_name' => '',
            'phone' => '0904203600',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 30,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'ปลาย',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'กชกร',
            'last_name' => '',
            'phone' => '0900025679',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 31,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'บีม',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'แหวนนภา',
            'last_name' => '',
            'phone' => '0815690122',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 31,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'แจ้',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'รุจิกร',
            'last_name' => '',
            'phone' => '0909512356',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 32,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'เจ',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'สาริณี',
            'last_name' => '',
            'phone' => '0946910023',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 32,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'จูน',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ธิดาพร',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 33,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'มิค',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ณฤดี',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 33,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'มาค',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'อัฉรพงษ์',
            'last_name' => '',
            'phone' => '0951255144',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 34,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ใบเตย',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'วาริน',
            'last_name' => '',
            'phone' => '0612515678',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 34,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'พลอย',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'เกศริน',
            'last_name' => '',
            'phone' => '0951235123',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 35,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไอโฟน',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'ปกป้อง',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 35,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'กอนเน่',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'กรวัช',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 36,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'แคลนอล',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'คมสัน',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 36,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนย (เบาว่าน)',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ดาวิกา',
            'last_name' => '',
            'phone' => '0912512895',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 37,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำทิพย์',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ธิติพร',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 37,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ภา',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'นิภาพร',
            'last_name' => '',
            'phone' => '0951262341',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 38,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์น',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ธิดาพร',
            'last_name' => '',
            'phone' => '0951268912',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 38,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ตาล',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ปณิธิตา',
            'last_name' => '',
            'phone' => '0618236123',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 39,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'แบม',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'สุวิพร',
            'last_name' => '',
            'phone' => '0641511612',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 39,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำฝน',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'กมลพร',
            'last_name' => '',
            'phone' => '0956234621',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 40,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ทราย',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'กรกช',
            'last_name' => '',
            'phone' => '0951236124',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 40,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เฟิร์น',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ดารุณี',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 41,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'มาย',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ลัลรวี',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 41,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ชมพู่',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'รวีวรรณ',
            'last_name' => '',
            'phone' => '0951236124',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 42,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'แม็ค',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'สุภัทร',
            'last_name' => '',
            'phone' => '0952851284',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 42,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนย',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'เมธาพร',
            'last_name' => '',
            'phone' => '0951236125',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 43,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เนม',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'นฤมล',
            'last_name' => '',
            'phone' => '0956125906',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 43,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ส้ม',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ธัญรัตน์',
            'last_name' => '',
            'phone' => '0984561235',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 44,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ฝ้าย (หน้าวัด)',
            'district_id' => 3,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ณัฐกานต์',
            'last_name' => '',
            'phone' => '0945125689',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 44,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'นุ่น',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ณัฐธิดา',
            'last_name' => '',
            'phone' => '0945678231',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 45,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้องส้มน้ำ',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'พรนิภา',
            'last_name' => '',
            'phone' => '0951235151',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 45,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'อะตอม',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'รินรดา',
            'last_name' => '',
            'phone' => '0661231231',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 46,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เชล',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'ชลายุ',
            'last_name' => '',
            'phone' => '0952568901',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 46,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไตตัน',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'สทานันท์',
            'last_name' => '',
            'phone' => '0954241222',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 47,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ไตเติล',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'ภานุกร',
            'last_name' => '',
            'phone' => '0854123783',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 47,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'ลูกตาล',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'วิภาวี',
            'last_name' => '',
            'phone' => '0961235123',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 48,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'ตังตัง',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'สุภาพร',
            'last_name' => '',
            'phone' => '0952358985',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 48,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'กิ๊ฟ',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ธนาพร',
            'last_name' => '',
            'phone' => '0912351123',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 49,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'มีน',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'มาริณี',
            'last_name' => '',
            'phone' => '0945128952',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 49,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'เมต',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'ปกรณ์',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 50,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'พลอย',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'พาริณี',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 50,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'กานิว',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'กชพรรณ',
            'last_name' => '',
            'phone' => '0851235113',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 51,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'กำนัน',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กชาย',
            'first_name' => 'สรวิศ',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 51,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'แมลงปอ',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ภาสกร',
            'last_name' => '',
            'phone' => '0922351231',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 52,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'น้ำ',
            'district_id' => 4,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'วาริน',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 52,
            'school_id' => 1

        ]);

        DB::table('students')->insert([
            'nickname' => 'นาข้าว',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'รันรวี',
            'last_name' => '',
            'phone' => '0647512356',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 53,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'มิว',
            'district_id' => 5,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'ทิวาพร',
            'last_name' => '',
            'phone' => '0613611112',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 53,
            'school_id' => 2

        ]);

        DB::table('students')->insert([
            'nickname' => 'โอ๋',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'เด็กหญิง',
            'first_name' => 'อาภาภรณ์',
            'last_name' => '',
            'phone' => 'ไม่มีข้อมูล',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 54,
            'school_id' => 3

        ]);

        DB::table('students')->insert([
            'nickname' => 'อั๋น',
            'district_id' => 6,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'พชร',
            'last_name' => '',
            'phone' => '0901235112',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 54,
            'school_id' => 3

        ]);


        DB::table('students')->insert([
            'nickname' => 'บีม',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'สาวิตรี',
            'last_name' => '',
            'phone' => '0872351616',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 55,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'เดียว',
            'district_id' => 7,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'สมโภช',
            'last_name' => '',
            'phone' => '0961236116',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 55,
            'school_id' => 1

        ]);


        DB::table('students')->insert([
            'nickname' => 'แนน',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'กุลนิษฐ์',
            'last_name' => '',
            'phone' => '0921235156',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 56,
            'school_id' => 2

        ]);


        DB::table('students')->insert([
            'nickname' => 'ป่าน',
            'district_id' => 8,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'ธัชนันท์',
            'last_name' => '',
            'phone' => '0912351661',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 56,
            'school_id' => 2

        ]);


        DB::table('students')->insert([
            'nickname' => 'บอล',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'นาย',
            'first_name' => 'สรยุทธ',
            'last_name' => '',
            'phone' => '0901234616',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 57,
            'school_id' => 3

        ]);


        DB::table('students')->insert([
            'nickname' => 'เตย',
            'district_id' => 1,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'เขมจิรา',
            'last_name' => '',
            'phone' => '0902123123',
            'car_id' => 1,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 57,
            'school_id' => 3

        ]);


        DB::table('students')->insert([
            'nickname' => 'แจ๊',
            'district_id' => 2,
            'card_id' => Str::random(8),
            'prefix' => 'นางสาว',
            'first_name' => 'เขมิสรา',
            'last_name' => '',
            'phone' => '0902351617',
            'car_id' => 2,
            'std_status_id' => 1,
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'user_id' => 58,
            'school_id' => 1

        ]);
    }
}
