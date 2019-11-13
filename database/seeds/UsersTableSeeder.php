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
            'username' => 'kid',
            'password' => Hash::make('123123123'),
            'prefix' => 'นาย',
            'first_name' => 'อชิตะ',
            'last_name' => 'ลิลิตสัจจะ',
            'fullname_u' => 'อชิตะ.ลิลิตสัจจะ',
            'relationship' => 'พ่อ',
            'address' => 'ตำบลหูช้าง',
            'email' => 'ashita_11479@hotmail.com',
            'phone' => '0898911553',
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'username' => 'blon',
            'password' => Hash::make('123123123'),
            'prefix' => 'Mr.',
            'first_name' => 'Khonjanat',
            'last_name' => 'Ketsin',
            'relationship' => 'Dad',
            'address' => 'ตำบลบ้านไร่',
            'email' => 'dviver100@gmail.com',
            'phone' => '0648763436',
            'image' => 'images/Students/เจนจ๋า_earn.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
