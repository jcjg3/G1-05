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
        
       
        $faker = Faker::create();
    
        foreach($patients as $patient){
            $medico = DB::table('employees')->where('id',rand(1,10))->value('id');
            $activity = DB::table('activities')->where('id',rand(1,3))->value('id');
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
