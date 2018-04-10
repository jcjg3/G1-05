<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
        foreach(range(1,10) as $index){
            $clinic = DB::table('clinics')->where('id',rand(1,10))->value('id');
            DB::table('employees')->insert([
                'name' => $faker->name,
                'birthdate' => $faker->date($format = 'd-m-Y', $max = 'now'),
                'clinic_id'=>$clinic,
                'email' => $faker->email,
                'contract' => $faker->numberBetween(90000,10000),
                'phone' => $faker->phoneNumber,
                'photo' => '',

            ]);
        }
        //identificador 11
        $clinic = DB::table('clinics')->where('id',rand(0,9))->value('id');
        DB::table('employees')->insert([
            'name' => 'Paula',
            'clinic_id'=>$clinic,
            'birthdate' => $faker->date($format = 'd-m-Y', $max = 'now'),
            'email' => $faker->email,
            'contract' => $faker->numberBetween(90000,10000),
            'phone' => $faker->phoneNumber,
            'photo' => '../images/e1.jpeg',

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
        ]);
      
    }
}
