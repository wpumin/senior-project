<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //! user สำหรับทดสอบตอนพรีรอบสอง
        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'parent',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'กฤตภาส',
            'last_name' => 'แสงวิกุลกิจ',
            'line_id' => 'moss1150',
            'address' => 'ถนนอินทรพิทักษ์ แขวง บางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'moss1150@gmail.com',
            'phone' => '0898111234',
            'image' => 'images/Users/moss.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'aj.wit',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'ดร.',
            'first_name' => 'วิทวินธ์',
            'last_name' => 'สุสุทธิ',
            'line_id' => 'dsgas2020',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'dsgas2020@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/aj.wit.jpg',
            'lattitude' => '15.085595',
            'longtitude' => '99.522781',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'aj.wib',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'ผศ. ดร.',
            'first_name' => 'วิบูลศักดิ์',
            'last_name' => 'วัฒายุ',
            'line_id' => 'dr.wibulsak',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'wibulsak2020@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/aj.wib.jpg',
            'lattitude' => '15.085383',
            'longtitude' => '99.524846',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'aj.chu',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'รศ. ดร.',
            'first_name' => 'ชูเกียรติ',
            'last_name' => 'วรสุชีพ',
            'line_id' => 'dr.chukait',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'ck_worasucheap2020@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/aj.chu.jpg',
            'lattitude' => '15.084139',
            'longtitude' => '99.522403',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'aj.suv',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'ดร.',
            'first_name' => 'ศุวิล',
            'last_name' => 'ชมชยัยา',
            'line_id' => 'dr.suvil',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'suvil2020@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/aj.suv.jpg',
            'lattitude' => '15.081456',
            'longtitude' => '99.520796',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'aj.par',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'ดร.',
            'first_name' => 'ปริเวท',
            'last_name' => 'วรรณโกวิท',
            'line_id' => 'dr.chukait',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'Pariwate@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/aj.par.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'aj.pun',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'ดร.',
            'first_name' => 'พรรณราย',
            'last_name' => 'ศิริเจริญ',
            'line_id' => 'dr.punarai',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'bua_pansi@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/aj.pun.jpg',
            'lattitude' => '15.080757',
            'longtitude' => '99.517247',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'aj.war',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'ดร.',
            'first_name' => 'วรินทร์',
            'last_name' => 'วัฒนพรพรหม',
            'line_id' => 'dr.warin',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'yongkub@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/aj.war.jpg',
            'lattitude' => '15.085942',
            'longtitude' => '99.520962',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'watcharee01',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'วัชชารี',
            'last_name' => 'ประสานสุข',
            'line_id' => 'watcharee1',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup8@gmail.com',
            'phone' => '0909785703',
            'image' => 'images/Users/วัชชารี.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'samniang.gan',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'สำเนียง',
            'last_name' => 'กางแก้ว',
            'line_id' => 'samniang.gan',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup9@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/สำเนียง.jpg',
            'lattitude' => '15.084646',
            'longtitude' => '99.531925',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'suradit.san',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'สุรดิต',
            'last_name' => 'สานสุวรณ',
            'line_id' => 'suradit.san',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup10@gmail.com',
            'phone' => '0645671261',
            'image' => 'images/Users/สุรดิต.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'chalasin.toto',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'ชลาสินท์',
            'last_name' => 'ยามไป',
            'line_id' => 'chalasin.toto',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup11@gmail.com',
            'phone' => '0922124546',
            'image' => 'images/Users/ชลาสินท์.jpg',
            'lattitude' => '15.084037',
            'longtitude' => '99.538276',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'apisra28',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'อภิสรา',
            'last_name' => 'ปิ่นแก้ว',
            'line_id' => 'apisra28',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup12@gmail.com',
            'phone' => '0641279755',
            'image' => 'images/Users/อภิสรา.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'Chernggol',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'ชรงค์กล',
            'last_name' => 'งามพลอด',
            'line_id' => 'charonggol.ngarm',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup13@gmail.com',
            'phone' => '0872718217',
            'image' => 'images/Users/ชรงค์กล.jpg',
            'lattitude' => '15.085038',
            'longtitude' => '99.547698',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'chana.pana',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'ชนา',
            'last_name' => 'ปากันนา',
            'line_id' => 'chana.pana',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup14@gmail.com',
            'phone' => '0897315617',
            'image' => 'images/Users/ชนา.jpg',
            'lattitude' => '15.085577',
            'longtitude' => '99.551002',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'angkana.poo',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'อังคนา',
            'last_name' => 'โพธิ์เกรียน',
            'line_id' => 'angkana.poo',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup15@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/อังคนา.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'ratchakrich.peach',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'รัชกฤต',
            'last_name' => 'พิพิชาธร',
            'line_id' => 'ratchakrich.peach',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup16@gmail.com',
            'phone' => '0821377821',
            'image' => 'images/Users/รัชกฤต.jpg',
            'lattitude' => '15.088180',
            'longtitude' => '99.563139',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'ning.niramon',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'นิรมล',
            'last_name' => 'กลมกล่อม',
            'line_id' => 'ratchakrich.peach',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup17@gmail.com',
            'phone' => '0909024581',
            'image' => 'images/Users/นิรมล.jpg',
            'lattitude' => '15.088273',
            'longtitude' => '99.567441',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'bordin.jira',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'บดินทร์',
            'last_name' => 'จิรทวีกุล',
            'line_id' => 'bordin.jira',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup18@gmail.com',
            'phone' => '0818694744',
            'image' => 'images/Users/บดินทร์.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'danaiwat.dan',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'ดนัยวัตร',
            'last_name' => 'จิตรวิศรกุล',
            'line_id' => 'danaiwat.dan',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup19@gmail.com',
            'phone' => '0895072549',
            'image' => 'images/Users/ดนัยวัตร.jpg',
            'lattitude' => '15.086782',
            'longtitude' => '99.584613',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'kimkomkrit',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'คมกฤต',
            'last_name' => 'มอดไม้',
            'line_id' => 'kimkomkrit',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup20@gmail.com',
            'phone' => '0899892161',
            'image' => 'images/Users/คมกฤต.jpg',
            'lattitude' => '15.084322',
            'longtitude' => '99.600097',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'wachiraporn',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'วชิราภรณ์',
            'last_name' => 'ปลาบู่',
            'line_id' => 'wachiraporn',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup21@gmail.com',
            'phone' => '0645611234',
            'image' => 'images/Users/วชิราภรณ์.jpg',
            'lattitude' => '15.091638',
            'longtitude' => '99.609078',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'kai.kasira',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'กษิรา',
            'last_name' => 'ศรีลอยเมือง',
            'line_id' => 'kai.kasira',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup22@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/กษิรา.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'kuikui',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'คณิตศร',
            'last_name' => 'สุวรรณมณี',
            'line_id' => 'kuikui',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup23@gmail.com',
            'phone' => '0912517161',
            'image' => 'images/Users/คณิตศร.jpg',
            'lattitude' => '15.094635',
            'longtitude' => '99.612893',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'parn.pann',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'ภัณฑิรา',
            'last_name' => 'สมบูรณ์พันธ์',
            'line_id' => 'parn.pann',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup24@gmail.com',
            'phone' => '0901211112',
            'image' => 'images/Users/ภัณฑิรา.jpg',
            'lattitude' => '15.094635',
            'longtitude' => '99.612893',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'chairat.chai',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'ไชยรัตน์',
            'last_name' => 'เอี่ยมวัลลพ',
            'line_id' => 'chairat.chai',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup25@gmail.com',
            'phone' => '0871271117',
            'image' => 'images/Users/ไชยรัตน์.jpg',
            'lattitude' => '15.094635',
            'longtitude' => '99.612893',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'pla.panwong',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'พรรณวงศ์',
            'last_name' => 'พงศ์วงไพศาล',
            'line_id' => 'pla.panwong',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup26@gmail.com',
            'phone' => '0901278116',
            'image' => 'images/Users/พรรณวงศ์.jpg',
            'lattitude' => '15.097473',
            'longtitude' => '99.616616',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'aun.eakpi',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'เอกพิสิต',
            'last_name' => 'จันทร์ชัย',
            'line_id' => 'aun.eakpi',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup27@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/เอกพิสิต.jpg',
            'lattitude' => '15.101368',
            'longtitude' => '99.621884',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'mimi.rungrawee',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'รุ่งรวี',
            'last_name' => 'ทองดี',
            'line_id' => 'mimi.rungrawee',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup28@gmail.com',
            'phone' => '0901268112',
            'image' => 'images/Users/รุ่งรวี.jpg',
            'lattitude' => '15.103636',
            'longtitude' => '99.624845',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'pan_pannipa',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'พรรณนิภา',
            'last_name' => 'จอมเทียน',
            'line_id' => 'pan_pannipa',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup29@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/พรรณนิภา.jpg',
            'lattitude' => '15.097473',
            'longtitude' => '99.616616',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'kitipon',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'กิติพล',
            'last_name' => 'ศรีสุพล',
            'line_id' => 'kitipon',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup30@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/กิติพล.jpg',
            'lattitude' => '15.103636',
            'longtitude' => '99.624845',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'su.suwann',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'สุวรรณา',
            'last_name' => 'สิทธิเวช',
            'line_id' => 'su.suwann',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup31@gmail.com',
            'phone' => '0651732235',
            'image' => 'images/Users/สุวรรณา.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'su.suriya',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'สุริยะ',
            'last_name' => 'รัตนวงศ์สกุล',
            'line_id' => 'su.suriya',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup32@gmail.com',
            'phone' => '0982318711',
            'image' => 'images/Users/สุริยะ.jpg',
            'lattitude' => '15.097473',
            'longtitude' => '99.616616',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'su.sukrit',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'สุกฤต',
            'last_name' => 'ทศฤทธิ์เจริญ',
            'line_id' => 'su.sukrit',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup33@gmail.com',
            'phone' => '0946127116',
            'image' => 'images/Users/สุกฤต.jpg',
            'lattitude' => '15.137692',
            'longtitude' => '99.655859',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'thakorn.korn',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'ทกร',
            'last_name' => 'เจริญ',
            'line_id' => 'thakorn.korn',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup34@gmail.com',
            'phone' => '0823461261',
            'image' => 'images/Users/ทกร.jpg',
            'lattitude' => '15.103636',
            'longtitude' => '99.624845',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'kodchaporn',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'กชพร',
            'last_name' => 'สิริสมบัติ',
            'line_id' => 'porn_kodcha24',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup35@gmail.com',
            'phone' => '0972351261',
            'image' => 'images/Users/กชพร.jpg',
            'lattitude' => '15.137692',
            'longtitude' => '99.655859',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'wichapat234',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'วิชชาพัช',
            'last_name' => 'มากด้วยทรัพย์',
            'line_id' => 'wichapat234',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup36@gmail.com',
            'phone' => '0612357721',
            'image' => 'images/Users/วิชชาพัช.jpg',
            'lattitude' => '15.144272',
            'longtitude' => '99.666144',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'ketum1112',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'เกตุม',
            'last_name' => 'สระบุรินทร์',
            'line_id' => 'ketum1112',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup37@gmail.com',
            'phone' => '0621151778',
            'image' => 'images/Users/เกตุม.jpg',
            'lattitude' => '15.155990',
            'longtitude' => '99.684932',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'paweenaaa',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'ปวีณา',
            'last_name' => 'รุ้งทอง',
            'line_id' => 'paweenaaa',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup38@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/ปวีณา.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'anak.yamk',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'อเนก',
            'last_name' => 'ยามขจร',
            'line_id' => 'anak.yamk',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup39@gmail.com',
            'phone' => '0892367821',
            'image' => 'images/Users/อเนก.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'puncharee.dk',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'ปัญชลี',
            'last_name' => 'ดวงขำ',
            'line_id' => 'puncharee.dk',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup40@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/ปัญชลี.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'navy.navi',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'นาวี',
            'last_name' => 'นาวิน',
            'line_id' => 'navy.navi',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup41@gmail.com',
            'phone' => '0613367116',
            'image' => 'images/Users/นาวี.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'soifah.jira',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'สร้อยฟ้า',
            'last_name' => 'จิรนันกุล',
            'line_id' => 'soifah.jira',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup42@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/สร้อยฟ้า.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'nuansi246',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'นวลศรี',
            'last_name' => 'เกตุศรีรัตน์',
            'line_id' => ' nuansi246',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup43@gmail.com',
            'phone' => '0912517716',
            'image' => 'images/Users/นวลศรี.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'niphon.phon',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'นิพล',
            'last_name' => 'สุวรรณเขต',
            'line_id' => ' niphon.phon',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup44@gmail.com',
            'phone' => '0951771261',
            'image' => 'images/Users/นิพล.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'suwanna.bun',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'สุวรรณา',
            'last_name' => 'บุญสว่าง',
            'line_id' => ' suwanna.bun',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup44@gmail.com',
            'phone' => '0922361167',
            'image' => 'images/Users/สุวรรณา2.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'jamlong.kn',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'จำลอง',
            'last_name' => 'แก้วนก',
            'line_id' => ' jamlong.kn',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup45@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/จำลอง.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'preyaaa',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'ปรียา',
            'last_name' => 'สมผล',
            'line_id' => ' preyaaa',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup46@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/ปรียา.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'norarat.pre',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'นรรัชต์',
            'last_name' => 'ชูชิต',
            'line_id' => ' norarat.pre',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup46@gmail.com',
            'phone' => '0912617124',
            'image' => 'images/Users/นรรัชต์.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'nok-narumol',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'นฤมล',
            'last_name' => 'ชุบชี',
            'line_id' => ' nok-narumol',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup46@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/นฤมล.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'ying.siripattakul',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'หญิง',
            'last_name' => 'สิริภัทรกุล',
            'line_id' => ' ying.siripattakul',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup47@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/หญิง.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'warisa1450',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'วาริสา',
            'last_name' => 'สิริภัทรกุล',
            'line_id' => ' warisa1450',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup48@gmail.com',
            'phone' => '0612467721',
            'image' => 'images/Users/วาริสา.jpg',
            'lattitude' => '15.175908',
            'longtitude' => '99.696597',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'charuay.kcy',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'จรวย',
            'last_name' => 'คชายนต์',
            'line_id' => 'charuay.kcy',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup49@gmail.com',
            'phone' => '0876584523',
            'image' => 'images/Users/จรวย.jpg',
            'lattitude' => '15.194091',
            'longtitude' => '99.694862',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'alarm.pink',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'อร่าม',
            'last_name' => 'ชมพู',
            'line_id' => 'alarm.pink',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup49@gmail.com',
            'phone' => '0831273721',
            'image' => 'images/Users/อร่าม.jpg',
            'lattitude' => '15.206127',
            'longtitude' => '99.693075',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'narong.jsn',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'ณรงค์',
            'last_name' => 'ใจสูงเนิน',
            'line_id' => 'narong.jsn',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup50@gmail.com',
            'phone' => '0862832213',
            'image' => 'images/Users/ณรงค์.jpg',
            'lattitude' => '15.258014',
            'longtitude' => '99.679948',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'acharaporn.porn',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'อัชราภรณ์',
            'last_name' => 'พรชัยเจริญ',
            'line_id' => 'acharaporn.porn',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup51@gmail.com',
            'phone' => '0907861277',
            'image' => 'images/Users/อัชราภรณ์.jpg',
            'lattitude' => '15.270341',
            'longtitude' => '99.680846',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'nicha34',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'นิชา',
            'last_name' => 'บุญสระวัง',
            'line_id' => 'nicha34',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup52@gmail.com',
            'phone' => '0651278827',
            'image' => 'images/Users/นิชา.jpg',
            'lattitude' => '15.284103',
            'longtitude' => '99.681888',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'eak.kbj',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'เอกนิพัตฏิ์',
            'last_name' => 'กล่อมรรจง',
            'line_id' => 'eak.kbj',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup53@gmail.com',
            'phone' => '0945617482',
            'image' => 'images/Users/เอกนิพัตฏิ์.jpg',
            'lattitude' => '15.326443',
            'longtitude' => '99.738517',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'aura.aoo',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'อรชุน',
            'last_name' => 'ปลายทาง',
            'line_id' => 'aura.aoo',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup54@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/อรชุน.jpg',
            'lattitude' => '15.330328',
            'longtitude' => '99.744176',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'korapong.sr',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'กรพงษ์',
            'last_name' => 'สมรักษ์',
            'line_id' => 'korapong.sr',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup55@gmail.com',
            'phone' => '0862271723',
            'image' => 'images/Users/กรพงษ์.jpg',
            'lattitude' => '15.330328',
            'longtitude' => '99.744176',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'kajit.wutti',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'ขจิต',
            'last_name' => 'วุฒิศักดิ์',
            'line_id' => 'kajit.wutti',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup56@gmail.com',
            'phone' => '0671257879',
            'image' => 'images/Users/ขจิต.jpg',
            'lattitude' => '15.326443',
            'longtitude' => '99.738517',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'punnee421',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'พรรณี',
            'last_name' => 'เนียมคง',
            'line_id' => 'punnee421',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup57@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/พรรณี.jpg',
            'lattitude' => '15.355383',
            'longtitude' => '99.781490',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'fishstop',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'ประยุทธ',
            'last_name' => 'สุธีรนาถ',
            'line_id' => 'fishstop',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup57@gmail.com',
            'phone' => 'ไม่มีข้อมูล',
            'image' => 'images/Users/ประยุทธ.jpg',
            'lattitude' => '15.358722',
            'longtitude' => '99.786406',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'thepnarong1669',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'สมเกียติ',
            'last_name' => 'เทพณรงค์',
            'line_id' => 'thepnarong1669',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup58@gmail.com',
            'phone' => '0666751689',
            'image' => 'images/Users/สมเกียติ.jpg',
            'lattitude' => '15.369419',
            'longtitude' => '99.801737',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '2',
            'car_id' => '1',
            'username' => 'aornaanong23',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นางสาว',
            'first_name' => 'อรอนงค์',
            'last_name' => 'สุเมธศักรินทร์',
            'line_id' => 'aornaanong23',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup59@gmail.com',
            'phone' => '0823477421',
            'image' => 'images/Users/อรอนงค์.jpg',
            'lattitude' => '15.363882',
            'longtitude' => '99.793288',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'pimmy_sainam',
            'password' => Hash::make('12341234'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาง',
            'first_name' => 'พิมพ์ใจ',
            'last_name' => 'สายน้ำ',
            'line_id' => 'pimmy_sainam',
            'address' => 'ถนนเทอดไท แขวงบางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'mockup60@gmail.com',
            'phone' => '0847446452',
            'image' => 'images/Users/พิมพ์ใจ.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        //! for dev

        DB::table('users')->insert([
            'role_id' => '1',
            'relationship_id' => '1',
            'car_id' => '1',
            'username' => 'kid',
            'password' => Hash::make('123123123'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'อชิตะ',
            'last_name' => 'ลิลิตสัจจะ',
            'line_id' => 'kiddd',
            'address' => 'ซอย หมู่บ้านสินทวีท่าข้าม 2 แขวง ท่าข้าม เขตบางขุนเทียน กรุงเทพมหานคร 10150',
            'email' => 'ashita11479@gmail.com',
            'phone' => '0898911553',
            'image' => 'images/Users/ashita.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'relationship_id' => '1',
            'car_id' => '2',
            'username' => 'blon',
            'password' => Hash::make('123123123'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'โกญจนาท',
            'last_name' => 'เกษศิลป์',
            'line_id' => 'balalon KS',
            'address' => 'ซอย พุทธบูชา 47 แขวง บางมด เขตทุ่งครุ กรุงเทพมหานคร 10140',
            'email' => 'dviver100@gmail.com',
            'phone' => '0648763436',
            'image' => 'images/Users/blon.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'relationship_id' => '3',
            'car_id' => '1',
            'username' => 'nonstop',
            'password' => Hash::make('123123123'),
            'secure_code' => Str::random(6),
            'status' => '0',
            'prefix' => 'นาย',
            'first_name' => 'ภูมินท์',
            'last_name' => 'วงษ์ศิริ',
            'line_id' => 'nonstop',
            'address' => 'ถนนอินทรพิทักษ์ แขวง บางยี่เรือ เขตธนบุรี กรุงเทพมหานคร 10600',
            'email' => 'pumin.wongsiri@gmail.com',
            'phone' => '0898115155',
            'image' => 'images/Users/nonstop.jpg',
            'lattitude' => '15.147868',
            'longtitude' => '99.672083',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
