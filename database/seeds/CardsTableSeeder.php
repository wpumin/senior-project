<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'code' => Str::random(8),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
