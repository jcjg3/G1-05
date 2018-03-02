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
        DB::table('patients')->delete();
        DB::table('patients')->insert([
            ('name') => 'Ana',
            ('lastname') => 'Soria',
            ('birthdate') => '25/04/1979',
            ('disability') => 'Traumatismo craneoencefálico'
        ]);
        DB::table('patients')->insert([
            ('name') => 'Manuel',
            ('lastname') => 'Serrano',
            ('birthdate') => '12/09/1990',
            ('disability') => 'Tumor cerebral'
        ]);

        DB::table('patients')->insert([
            ('name') => 'Pedro',
            ('lastname') => 'Molinas',
            ('birthdate') => '25/04/1965',
            ('disability') => 'Ictus'
        ]);
    }
}
