<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Payroll;
use App\Models\User;
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
            UserSeeder::class,
            ActionSeeder::class,
            ClientSeeder::class,
            EmployeeSeeder::class,
            AreaSeeder::class,
            ServiceSeeder::class,
            JobStatusSeeder::class,
            PayrollSeeder::class,
            InvoiceSeeder::class,
            PropertySeeder::class,
            JobSeeder::class,
            TimeTableSeeder::class,
            ScheduleSeeder::class,
            PayrollJobSeeder::class,
            InvoiceJobSeeder::class
        ]);
    }
}
