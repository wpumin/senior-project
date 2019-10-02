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
            'name' => 'ชำระแล้ว',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'name' => 'รอตรวจสอบ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'name' => 'ค้างชำระ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
