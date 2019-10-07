<?php

use Illuminate\Database\Seeder;

class qrcodetableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qrcode')->insert([
            'price' => '350',
            'image' => 'images/qrcode_pay/350.png'
        ]);

        DB::table('qrcode')->insert([
            'price' => '500',
            'image' => 'images/qrcode_pay/500.png'
        ]);

        DB::table('qrcode')->insert([
            'price' => '600',
            'image' => 'images/qrcode_pay/600.png'
        ]);

        DB::table('qrcode')->insert([
            'price' => '650',
            'image' => 'images/qrcode_pay/650.png'
        ]);

        DB::table('qrcode')->insert([
            'price' => '700',
            'image' => 'images/qrcode_pay/700.png'
        ]);

        DB::table('qrcode')->insert([
            'price' => '900',
            'image' => 'images/qrcode_pay/900.png'
        ]);
    }
}
