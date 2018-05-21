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
        
        DB::table('employee_patient')->delete();

        
        //$patients=App\patient::get();
        
       
        $faker = Faker::create();
        $medico = DB::table('employees')->where('id',1)->value('id');
        $activity = DB::table('activities')->where('id', 2)->value('id');
        $patient = DB::table('patients')->where('id', 2)->value('id');
        DB::table('employee_patient')->insert([
            'fecha' => '10-05-2018',//$faker->date($format = 'd-m-Y', $max = '10-05-2018'),
            'hora' => $faker->time($format = 'H-i-m', $max = 'now'),
            'patient_id' => $patient,
            'employee_id' => $medico,
            'activity_id' => $activity 
        ]);
        /*
        foreach($patients as $patient){
            $medico = DB::table('employees')->where('id',rand(1,2))->value('id');
            $activity = DB::table('activities')->where('id',rand(1,3))->value('id');
            DB::table('employee_patient')->insert([
                'fecha' => $faker->date($format = 'd-m-Y', $max = '31-12-2022'),
                'hora' => $faker->time($format = 'H-i-m', $max = 'now'),
                'patient_id' => $patient->id,
                'employee_id' => $medico,
                'activity_id' => $activity 
                ]);

        }*/
    }
}
