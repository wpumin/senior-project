<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            StudentsTableSeeder::class,
            StdStatusesTableSeeder::class,
            SchoolsTableSeeder::class,
            CarsTableSeeder::class,
            AppointmentsTableSeeder::class,
            ReportTableSeeder::class,
            PaymentStatusTableSeeder::class,
            TypeReportTableSeeder::class,
            RolesTableSeeder::class,
            DistrictTableSeeder::class,
            PeriodTimeTableSeeder::class,
            BankTableSeeder::class,
            RelationshipTableSeeder::class,
            AppStatusTableSeeder::class,
            MarkTableSeeder::class,
            NewsTableSeeder::class,
            NewStatusesTableSeeder::class,
            PaymentInformTableSeeder::class,
            PaymentLogTableSeeder::class,
        ]);
    }
}
