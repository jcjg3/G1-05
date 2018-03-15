<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


use App\Employee;
use App\Patient;
class TestAssociations extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAssociationEmployeePatient()
    {
        //creamos al empleado 1
        $employee = new Employee();
        $employee->name = 'Maria';
        $employee->birthdate = '24/08/1975';
        $employee->email = 'mrgr1@ua.es';
        $employee->contract ='100';
        $employee->phone = 683649685;

        $employee->save();
        
        //creamos el paciente 1
        $patient = new Patient();
        $patient->name = 'Juan Carlos';
        $patient->birthdate = '15/06/1997';
        $patient->disability = 'Traumatismo craneoencefálico';
        
        $patient->save();

        $employee->patients()->attach($patient->id);
        //creamos el empleado 2
        $employe = new Employee();
        $employe->name = 'Eva Maria';
        $employe->birthdate = '24/08/1975';
        $employe->email = 'emgr1@ua.es';
        $employe->contract ='101';
        $employe->phone = 683647856;

        $employe->save();
        //Asociamos el paciente 1 y el empleado 2
        $employe->patients()->attach($patient->id);

        //creamos el paciente 2
        $patien = new Patient();
        $patien->name = 'Juan Carlos';
        $patien->birthdate = '15/06/1997';
        $patien->disability = 'Traumatismo craneoencefálico';
        
        $patien->save();

        //Al empleado 2 le añadimos el paciente 2
        $employe->patients()->attach($patien->id);

        $this->assertEquals($patient->employees[0]->name, 'Maria');
        $this->assertEquals($patient->employees[1]->name, 'Eva Maria');
        $this->assertEquals($patien->employees[0]->name, 'Eva Maria');
        $this->assertEquals($employe->patients[0]->name, 'Juan Carlos');

        $employe->delete();
        $employee->delete();
        $patient->delete();
        $patien->delete();
    }
}
