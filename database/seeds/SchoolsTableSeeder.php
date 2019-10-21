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
            'name_school' => 'โรงเรียนหนองฉางวิทยา',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('schools')->insert([
            'name_school' => 'โรงเรียนวัดหนองขุนชาติ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('schools')->insert([
            'name_school' => 'โรงเรียนอุทัยธรรมานุวัตรวิทยา',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
