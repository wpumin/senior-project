<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            'user_id' => 1,
            'type_id' => 1,
            'title' => 'ขับรถหวาดเสียว',
            'content' => 'คนขับรถส่งนักเรียนคันสีส้ม เส้นโรงเรียนวัดทับหลวงขับรถได้หวาดเสียวมากเลยค่ะ วันก่อนดิฉันเห็นอยู่แถวๆ เส้น 3011 ยังไงช่วยรบกวนตักเตือนคนขับด้วยนะคะ เป็นห่วงบุตรหลานจริงๆ ค่ะ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
