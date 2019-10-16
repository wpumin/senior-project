<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'name' => 'ตำบล บ้านไร่',
            'status' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('provinces')->insert([
            'name' => 'ตำบล เมืองการุ้ง',
            'status' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('provinces')->insert([
            'name' => 'ตำบล หูช้าง',
            'status' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('provinces')->insert([
            'name' => 'ตำบล วังหิน',
            'status' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('provinces')->insert([
            'name' => 'ตำบล หนองฉาง',
            'status' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
