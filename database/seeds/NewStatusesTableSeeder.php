<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NewStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_statuses')->insert([
            'name' => 'เผยแพร่',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('news_statuses')->insert([
            'name' => 'งดเผยแพร่',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
