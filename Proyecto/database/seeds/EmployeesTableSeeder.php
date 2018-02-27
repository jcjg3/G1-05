<?php

use Illuminate\Database\Seeder;

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
        
        DB::table('employees')->insert([
            'DNI' => '12345678Y',
            'name' => 'Paula',
            'lastname' => 'Rodriguez',
            'birthdate' => '3/01/1984',
            'email' => 'prod@gmail.com',
            'contract' => '12345gy',
            'phone' => '653366678',

        ]);
        DB::table('employees')->insert([
            'DNI' => '12342565H',
            'name' => 'Miguel',
            'lastname' => 'Ledesma',
            'birthdate' => '3/01/1984',
            'email' => 'migles@gmail.com',
            'contract' => '34587gy',
            'phone' => '652245856',

        ]);
    }
}
