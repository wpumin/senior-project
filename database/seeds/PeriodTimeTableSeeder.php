<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PeriodTimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('period_times')->insert([
            'name' => 'ช่วงเช้า',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('period_times')->insert([
            'name' => 'ช่วงเย็น',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
