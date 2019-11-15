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
            'tran_key' => '004',
            'student_id' => '1',
            'timepicker' => '15:05',
            'date' => '14/11/62',
            'content' => 'test',
            'bill_image' => 'images\Payments\_10042562__bam',
            'bank_id' => '2',
            'pm_status_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
