<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PatientsTableSeeder::class);
         $this->call(EmployeesTableSeeder::class);
         $this->call(ActivitiesTableSeeder::class);
         $this->call(EmployeesPatientsTableSeeder::class);
         $this->call(UserTableSeeder::class);
    }
}
