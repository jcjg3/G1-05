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

        $this->call(UserTableSeeder::class);
         $this->call(ClinicTableSeeder::class); 
         $this->call(PatientsTableSeeder::class);
         $this->call(EmployeesTableSeeder::class);
         $this->call(ActivitiesTableSeeder::class);
         $this->call(EmployeesPatientsTableSeeder::class);
         
    }
}
