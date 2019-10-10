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
            'first_name' => 'อชิตะ',
            'last_name' => 'ลิลิตสัจจะ',
            'fullname_u' => 'อชิตะ.ลิลิตสัจจะ',
            'relationship' => 'พ่อ',
            'address' => 'ตำบลหูช้าง',
            'email' => 'ashita_11479@hotmail.com',
            'mobile' => '0898911553',
            'image' => 'pic A',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'username' => 'blon',
            'password' => Hash::make('123123123'),
            'first_name' => 'Khonjanat',
            'last_name' => 'Ketsin',
            'relationship' => 'Dad',
            'address' => 'ตำบลบ้านไร่',
            'email' => 'dvver@gmail.com',
            'mobile' => '0648763436',
            'image' => 'pic A',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
