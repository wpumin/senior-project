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
            'name' => 'ค้างชำระ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('payment_statuses')->insert([
            'name' => 'ชำระแล้ว',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('payment_statuses')->insert([
            'name' => 'รอการตรวจสอบ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
