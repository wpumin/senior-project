<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'ผู้ปกครอง',
        ]);

        DB::table('roles')->insert([
            'name' => 'คนขับรถ',
        ]);

        DB::table('roles')->insert([
            'name' => 'แอดมิน',
        ]);
    }
}
