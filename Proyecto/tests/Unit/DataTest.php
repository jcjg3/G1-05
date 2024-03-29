<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Activity;
use App\Employee;
use App\Patient;

class DataTest extends TestCase
{
     /**
     * Checks the number and names of the sponsors
     *
     * @return void
     */
    public function testActivityData()
    {
        $count = Activity::all()->count();
        $this->assertEquals($count, 3);

        $this->assertDatabaseHas('activities', ['name' => 'Grupo de ayuda mutua']);
        $this->assertDatabaseHas('activities', ['name' => 'Neuropsicologia']);
        $this->assertDatabaseHas('activities', ['name' => 'Creatividad teurapetica']);
    }

    /**
     * Checks the number and names of the teams
     *
     * @return void
     */
    public function testEmployeeData()
    {
        $count = Employee::all()->count();
        $this->assertEquals($count, 12);

        $this->assertDatabaseHas('employees', ['name' => 'Paula']);
        $this->assertDatabaseHas('employees', ['name' => 'Miguel']);
    }

    /**
     * Checks the number and data of the players
     *
     * @return void
     */
    public function testPatientsData()
    {
        $count = Patient::all()->count();
        $this->assertEquals($count, 12);

        $this->assertDatabaseHas('patients', ['name' => 'Ana']);
        $this->assertDatabaseHas('patients', ['name' => 'Manuel']);
    }

    /**
     * Checks the teams associated to the sponsors
     *
     * @return void
     */
    public function testEmployeeByPatient()
    {
        $patient = Patient::where('name', 'Ana')->first();
        $this->assertTrue($patient->employees->contains('name', 'Paula'));

    }
}
