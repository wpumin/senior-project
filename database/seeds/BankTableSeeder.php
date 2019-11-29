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
            'name' => 'กสิกรไทย',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('banks')->insert([
            'name' => 'ไทยพาณีชย์',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('banks')->insert([
            'name' => 'กรุงไทย',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('banks')->insert([
            'name' => 'กรุงศรี',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
