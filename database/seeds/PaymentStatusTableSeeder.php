<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaymentStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_statuses')->insert([
            'name' => 'ยังไม่จ่าย',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('payment_statuses')->insert([
            'name' => 'จ่ายแล้ว',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('payment_statuses')->insert([
            'name' => 'รอตรวจสอบ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
