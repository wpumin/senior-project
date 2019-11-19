<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'ธนาคารกสิกรไทย',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('banks')->insert([
            'name' => 'ธนาคารไทยพาณีชย์',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('banks')->insert([
            'name' => 'ธนาคารกรุงไทย',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('banks')->insert([
            'name' => 'ธนาคารกรุงศรี',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
