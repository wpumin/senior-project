<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaymentLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_logs')->insert([
            'tran_key' => '001',
            'month' => 'ก.ย.',
            'year' => '2562',
            'student_id' => '115',
            'qr_code' => 'images\qrcode_pay\350',
            'pm_status_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
