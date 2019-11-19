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
            'name_school' => 'หนองฉางวิทยา',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('schools')->insert([
            'name_school' => 'วัดหนองขุนชาติ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('schools')->insert([
            'name_school' => 'อุทัยธรรมานุวัตรวิทยา',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
