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
        /*$faker = Faker::create();
        foreach(range(1,4) as $index){
            DB::table('employees')->insert([
                'name' => $faker->name,
                'birthdate' => $faker->date($format = 'd-m-Y', $max = 'now'),
                'email' => $faker->email,
                'contract' => $faker->numberBetween(90000,10000),
                'phone' => $faker->phoneNumber,
                'photo' => '',
                'password' => bcrypt('user'),

            ]);
        }*/
        //identificador 11
        /*DB::table('employees')->insert([
            'name' => 'Paula',
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
