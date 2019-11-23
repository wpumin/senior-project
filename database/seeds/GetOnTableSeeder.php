<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GetOnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('get_ons')->insert([
            'name' => 'ขาขึ้น',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('get_ons')->insert([
            'name' => 'ขาลง',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
