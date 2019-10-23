<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_reports')->insert([
            'name' => 'เล็กน้อย',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('order_reports')->insert([
            'name' => 'ปานกลาง',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('order_reports')->insert([
            'name' => 'เร่งด่วน',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
