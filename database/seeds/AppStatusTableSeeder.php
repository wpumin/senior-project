<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AppStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_statuses')->insert([
            'app_status_name' => 'ยังไม่อนุมัติ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('app_statuses')->insert([
            'app_status_name' => 'อนุมัติแล้ว',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
