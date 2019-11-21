<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'kid',
            'password' => Hash::make('123123123'),
            'prefix' => 'นาย',
            'first_name' => 'อชิตะ',
            'last_name' => 'ลิลิตสัจจะ',
            'line_id' => 'kiddd',
            'address' => 'ซอย หมู่บ้านสินทวีท่าข้าม 2 แขวง ท่าข้าม เขตบางขุนเทียน กรุงเทพมหานคร 10150',
            'email' => 'ashita11479@gmail.com',
            'phone' => '0898911553',
            'image' => 'images/Users/ashita.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'relationship_id' => '1',
            'car_id' => '2',
            'username' => 'blon',
            'password' => Hash::make('123123123'),
            'prefix' => 'นาย',
            'first_name' => 'โกญจนาท',
            'last_name' => 'เกษศิลป์',
            'line_id' => 'balalon KS',
            'address' => 'ซอย พุทธบูชา 47 แขวง บางมด เขตทุ่งครุ กรุงเทพมหานคร 10140',
            'email' => 'dviver100@gmail.com',
            'phone' => '0648763436',
            'image' => 'images/Users/blon.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'nonstop',
            'password' => Hash::make('123123123'),
            'prefix' => 'นาย',
            'first_name' => 'ภูมินท์',
            'last_name' => 'วงษ์ศิริ',
            'line_id' => 'nonstop',
            'address' => 'ถนนอินทรพิทักษ์ แขวง บางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'pumin.wongsiri@gmail.com',
            'phone' => '0898115155',
            'image' => 'images/Users/pumin.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // user สำหรับทดสอบตอนพรีรอบแรก 
        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'parent',
            'password' => Hash::make('12341234'),
            'prefix' => 'นาย',
            'first_name' => 'กฤตภาส',
            'last_name' => 'แสงวิกุลกิจ',
            'line_id' => 'moss1150',
            'address' => 'ถนนอินทรพิทักษ์ แขวง บางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'moss1150@gmail.com',
            'phone' => '0898111234',
            'image' => 'images/Users/pumin.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
