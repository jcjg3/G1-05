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
        $i = 0;
        foreach(range(1,20) as $index){
            $i =($i+1);
            DB::table('expedients')->insert([
                ('diagnosis') => 'a fecha de 1343537',
                ('patient_id')=>$i,
            ]);
        }
    }
}
