<?php

use Illuminate\Database\Seeder;

class MarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            'student_id' => '115',
            'date_am_1' => 'T',
            'date_am_2' => 'F',
            'date_pm_1' => 'D',
            'date_pm_2' => 'T'
        ]);

        DB::table('districts')->insert([
            'student_id' => '115',
            'date_am_1' => 'T',
            'date_am_2' => 'F',
            'date_pm_1' => 'D',
            'date_pm_2' => 'T'
        ]);

        DB::table('districts')->insert([
            'student_id' => '115',
            'date_am_1' => 'T',
            'date_am_2' => 'F',
            'date_pm_1' => 'D',
            'date_pm_2' => 'T'
        ]);

        DB::table('districts')->insert([
            'student_id' => '115',
            'date_am_1' => 'T',
            'date_am_2' => 'F',
            'date_pm_1' => 'D',
            'date_pm_2' => 'T'
        ]);

        DB::table('districts')->insert([
            'student_id' => '115',
            'date_am_1' => 'T',
            'date_am_2' => 'F',
            'date_pm_1' => 'D',
            'date_pm_2' => 'T'
        ]);

    }
}
