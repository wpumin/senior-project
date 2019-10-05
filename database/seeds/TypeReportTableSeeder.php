<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TypeReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_reports')->insert([
            'name' => 'พฤติกรรมคนขับ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('type_reports')->insert([
            'name' => 'ระบบการเงิน',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('type_reports')->insert([
            'name' => 'ระบบแจ้งเดินทางเอง',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('type_reports')->insert([
            'name' => 'ระบบติดตามรถบัส',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('type_reports')->insert([
            'name' => 'แดชบอร์ด',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('type_reports')->insert([
            'name' => 'แก้ไขโปรไฟล์',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}