<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'ยังไม่ขึ้นรถ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'name' => 'ขึ้นรถแล้ว',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'name' => 'ลงรถแล้ว',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'name' => 'แจ้งเดินทางเอง',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
