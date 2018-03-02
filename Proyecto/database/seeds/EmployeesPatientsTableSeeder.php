<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class EmployeesPatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('employees_patients')->delete();

        $employees=App\employee::get();
        $patients=App\patient::get();
        $medico = DB::table('employees')->where('id','5')->value('id');
        $activity = DB::table('activities')->where('id','2')->value('id');
        $faker = Faker::create();
    
        foreach($patients as $patient){
            DB::table('employees_patients')->insert([
                'fecha' => $faker->date($format = 'd-m-Y', $max = '31-12-2022'),
                'hora' => $faker->time($format = 'H-i-m', $max = 'now'),
                'patient_id' => $patient->id,
                'employee_id' => $medico,
                'activity_id' => $activity 
                ]);
            
        }
    }
}
