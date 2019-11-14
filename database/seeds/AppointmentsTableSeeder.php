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
            'app_status_id' => 1,
            'period_time_id' => 1,
            'appointment_at' => 12/01/61,
            'content' => NULL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('appointments')->insert([
            'user_id' => 2,
            'app_status_id' => 2,
            'period_time_id' => 2,
            'appointment_at' => 12/01/61,
            'content' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
