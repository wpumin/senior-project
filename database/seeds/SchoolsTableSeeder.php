<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'name' => 'โรงเรียนหนองฉางวิทยา',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('schools')->insert([
            'name' => 'โรงเรียนวัดหนองขุนชาติ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('schools')->insert([
            'name' => 'โรงเรียนอุทัยธรรมานุวัตรวิทยา',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
