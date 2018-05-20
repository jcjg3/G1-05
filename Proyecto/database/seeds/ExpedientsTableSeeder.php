<?php

use Illuminate\Database\Seeder;

class ExpedientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expedients')->delete();

        $patient = DB::table('patients')->where('id', 1)->value('id');
        DB::table('expedients')->insert([
            ('diagnosis') => 'a fecha de 1343537',
            ('patient_id') => $patient,
            
        ]);
    }

}
