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
            'period_time' => 'เช้า(ขาไป)',
            'date' => Str::random(8),
            'content' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')        
        ]);

        DB::table('appointments')->insert([
            'period_time' => 'เย็น(ขากลับ)',
            'date' => Str::random(8),
            'content' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')        
        ]);
    }
}
