<?php

use Illuminate\Database\Seeder;

class RelationshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relationships')->insert([
            'name' => 'พ่อ',
        ]);

        DB::table('relationships')->insert([
            'name' => 'แม่',
        ]);

        DB::table('relationships')->insert([
            'name' => 'ผู้ปกครอง',
        ]);
    }
}
