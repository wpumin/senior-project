<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            'user_id' => 1,
            'period_time' => 'เช้า(ขาไป)',
            'date' => Carbon::now()->format('Y-m-d'),
            'content' => NULL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('appointments')->insert([
            'user_id' => 2,
            'period_time' => 'เย็น(ขากลับ)',
            'date' => Carbon::now()->format('Y-m-d'),
            'content' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
