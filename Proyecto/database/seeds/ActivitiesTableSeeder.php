<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([

            'name' => 'Grupo de ayuda mutua',
            'description' => 'ofrecer una atencion psicologica integral',
            'votes' => '15',
            'dateActivity' => '12/02/2018'
        ]);
        DB::table('activities')->insert([

            'name' => ' Neuropsicología',
            'description' => 'un plan individual para rehabilitacion',
            'votes' => '20',
            'dateActivity' => '9/01/2018'
        ]);

        DB::table('activities')->insert([

            'name' => 'Creatividad teurapetica',
            'description' => 'para expresar sus sentimientos y emociones',
            'votes' => '15',
            'dateActivity' => '26/01/2018'
        ]);
        }
}
