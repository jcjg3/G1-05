<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        /*
         $table->string('DNI')->primary();
            $table->string('name');
            $table->string('lastname');
            $table->date('birthdate');
            $table->string('disability');
        */
        DB::table('patients')->delete();
        DB::table('patients')->insert([
            ('DNI') => '11111111A',
            ('name') => 'Ana',
            ('lastname') => 'Soria',
            ('birthdate') => '25/04/1979',
            ('disability') => 'Traumatismo craneoencefálico'
        ]);
        DB::table('patients')->insert([
            ('DNI') => '22222222A',
            ('name') => 'Manuel',
            ('lastname') => 'Serrano',
            ('birthdate') => '12/09/1990',
            ('disability') => 'Tumor cerebral'
        ]);

        DB::table('patients')->insert([
            ('DNI') => '33333333A',
            ('name') => 'Pedro',
            ('lastname') => 'Molinas',
            ('birthdate') => '25/04/1965',
            ('disability') => 'Ictus'
        ]);
    }
}
