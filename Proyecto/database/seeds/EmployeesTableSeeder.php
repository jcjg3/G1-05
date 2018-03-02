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
            DB::table('employees')->insert([
                'name' => $faker->name,
                'birthdate' => $faker->date($format = 'd-m-Y', $max = 'now'),
                'email' => $faker->email,
                'contract' => $faker->numberBetween(90000,10000),
                'phone' => $faker->phoneNumber,

            ]);
        }
      
    }
}
