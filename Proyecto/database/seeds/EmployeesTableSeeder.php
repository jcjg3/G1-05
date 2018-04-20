<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('employees')->delete();

        $faker = Faker::create();
            DB::table('employees')->insert([
            'name' => 'jj',
            'birthdate' => $faker->date($format = 'd-m-Y', $max = 'now'),
            'clinic_id'=> 1,
            'email' => 'jj@gmail.com',
            'contract' => $faker->numberBetween(90000,10000),
            'phone' => $faker->phoneNumber,
            'photo' => '',
            'password' => bcrypt('user'),

        ]);
        DB::table('employees')->insert([
            'name' => 'cisco',
            'birthdate' => $faker->date($format = 'd-m-Y', $max = 'now'),
            'clinic_id'=>1,
            'email' => 'cisco@gmail.com',
            'contract' => $faker->numberBetween(90000,10000),
            'phone' => $faker->phoneNumber,
            'photo' => '',
            'password' => bcrypt('user'),

        ]);
        
        $employee = Employee::find(1);
        $employee->user()->associate(2);
        $employee = Employee::find(1);
        $employee->user()->associate(3);
        //identificador 11

        /*DB::table('employees')->insert([
            'name' => 'Paula',
            'clinic_id'=>$clinic,
            'birthdate' => $faker->date($format = 'd-m-Y', $max = 'now'),
            'email' => $faker->email,
            'contract' => $faker->numberBetween(90000,10000),
            'phone' => $faker->phoneNumber,
            'photo' => '../images/e1.jpeg',
            'password' => bcrypt('user'),
            'user_id' =>'2',

        ]);
        //identificador 12
        DB::table('employees')->insert([
            'name' => 'Miguel',
            'clinic_id'=>$clinic,
            'birthdate' => $faker->date($format = 'd-m-Y', $max = 'now'),
            'email' => $faker->email,
            'contract' => $faker->numberBetween(90000,10000),
            'phone' => $faker->phoneNumber,
            'photo' => '../images/e2.jpeg',
            'password' => bcrypt('user'),
            'user_id' =>'3',
        ]);*/
      
    }
}
