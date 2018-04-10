<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->delete();
        $faker = Faker::create();

        foreach(range(1,20) as $index){
            DB::table('patients')->insert([
                ('name') => $faker->name,
                ('birthdate') => $faker->date($format = 'd-m-Y', $max = 'now'),
                ('disability') => 'Traumatismo craneoencefálico',
                ('phone') => $faker->phoneNumber,
                ('address') => $faker->address,
                ('photo') => '../images/nophoto.png',
                ('sexo') => 'female'
            ]);
        }
        //11
        DB::table('patients')->insert([
            ('name') => 'Ana',
            ('birthdate') => $faker->date($format = 'd-m-Y', $max = 'now'),
            ('disability') => 'Traumatismo craneoencefálico',
            ('phone') => $faker->phoneNumber,
            ('address') => $faker->address,
            ('photo') => '../images/nophoto.png',
            ('sexo') => 'female'
        ]);
        //12
        DB::table('patients')->insert([
            ('name') => 'Manuel',
            ('birthdate') => $faker->date($format = 'd-m-Y', $max = 'now'),
            ('disability') => 'Traumatismo craneoencefálico',
            ('phone') => $faker->phoneNumber,
            ('address') => $faker->address,
            ('photo') => '../images/nophoto.png',
            ('sexo') => 'male'
        ]);
    }
}
