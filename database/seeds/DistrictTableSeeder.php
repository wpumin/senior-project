<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            'name' => 'เทศบาลตำบลบ้านไร่',
            'status' => '1',
            'price' => 900,
            'qr_code' => 'images/qrcode_pay/900.png',
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'ตำบล หูช้าง',
            'status' => '1',
            'price' => 700,
            'qr_code' => 'images/qrcode_pay/700.png',
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'ตำบล หนองหย่าง',
            'status' => '1',
            'price' => 650,
            'qr_code' => 'images/qrcode_pay/650.png',
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'ตำบล เมืองการุ้ง',
            'status' => '1',
            'price' => 650,
            'qr_code' => 'images/qrcode_pay/650.png',
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'ตำบล บ้านคลองโป่ง',
            'status' => '1',
            'price' => 600,
            'qr_code' => 'images/qrcode_pay/600.png',
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'ตำบล วังหิน',
            'status' => '1',
            'price' => 500,
            'qr_code' => 'images/qrcode_pay/500.png',
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'ตำบล เขาตะพาบ',
            'status' => '1',
            'price' => 350,
            'qr_code' => 'images/qrcode_pay/350.png',
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'ตำบล ทุ่งนางาม',
            'status' => '1',
            'price' => 350,
            'qr_code' => 'images/qrcode_pay/350.png',
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'โรงเรียนหนองฉางวิทยา',
            'status' => '1',
            'price' => null,
            'qr_code' => null,
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'โรงเรียนธรรมานุวัตรวิทยา',
            'status' => '1',
            'price' => null,
            'qr_code' => null,
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        DB::table('districts')->insert([
            'name' => 'โรงเรียนวัดหนองขุนชาติ',
            'status' => '1',
            'price' => null,
            'qr_code' => null,
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);
    }
}
