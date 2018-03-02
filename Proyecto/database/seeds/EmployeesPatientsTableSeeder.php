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
        $paciente = DB::table('patients')->where('id','1')->value('id');
        $paciente1 = DB::table('patients')->where('id','2')->value('id');
        $medico = DB::table('employees')->where('id','1')->value('id');
        $activity = DB::table('activities')->where('id','2')->value('id');
        DB::table('employee_patient')->delete();

        DB::table('employee_patient')->insert([
            'employee_id' => $medico,
            'patient_id' => $paciente,
            'activity_id' => $activity,
            'fecha' => '27/02/2018',
            'hora' => '19:30',
        ]);

        DB::table('employee_patient')->insert([
            'employee_id' => $medico,
            'patient_id' => $paciente1,
            'activity_id' => $activity,
            'fecha' => '28/02/2018',
            'hora' => '19:30',
        ]);
    }
}
