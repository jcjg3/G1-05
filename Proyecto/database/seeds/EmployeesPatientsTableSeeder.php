<?php

use Illuminate\Database\Seeder;

class EmployeesPatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $paciente = DB::table('patients')->where('DNI','11111111A')->value('DNI');
        $medico = DB::table('employees')->where('DNI','12345678Y')->value('DNI');
        $activity = DB::table('activities')->where('id','2')->value('id');
        DB::table('employees_patients')->delete();

        DB::table('employees_patients')->insert([
            'fecha' => '27/02/2018',
            'hora' => '19:30',
            'patient_id' => $paciente,
            'employee_id' => $medico,
            'activity_id' => $activity 
        ]);
    }
}
