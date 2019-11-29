<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaymentInformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_informs')->insert([
            'payment_log_id' => '1',
            // 'student_id' => '1',
            'timepicker' => '15:05',
            'date' => '14/11/62',
            'bank_id' => '2',
            'pm_status_id' => '1',
            'imgInp' => 'images/Payments/_10042562_1220_bill',
            'price' => '900',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
