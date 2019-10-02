<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nickname' => 'จ๋าย',
            'price' => 900,
            'car_id' => 1
        ]);

        DB::table('students')->insert([
            'nickname' => 'จิน',
            'price' => 900,
            'car_id' => 2
        ]);
    }
}
