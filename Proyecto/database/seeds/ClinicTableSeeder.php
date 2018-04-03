<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClinicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinics')->delete();
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            DB::table('clinics')->insert([
                'name' => $faker->company,
                'direccion'=>$faker->address,
                'localidad'=>$faker->state,
                'provincia'=>$faker->city,
                'phone'=>$faker->phoneNumber,
                'email'=>$faker->email,
            ]);
        }
    }
}
