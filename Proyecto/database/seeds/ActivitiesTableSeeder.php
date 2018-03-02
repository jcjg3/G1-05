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
        DB::table('activities')->delete();
        DB::table('activities')->insert([

            'name' => 'Grupo de ayuda mutua',
            'description' => 'ofrecer una atencion psicologica integral',
            'votes' => '15'
        ]);
        DB::table('activities')->insert([

            'name' => 'Neuropsicologia',
            'description' => 'un plan individual para rehabilitacion',
            'votes' => '20'
        ]);

        DB::table('activities')->insert([

            'name' => 'Creatividad teurapetica',
            'description' => 'para expresar sus sentimientos y emociones',
            'votes' => '15'
        ]);
        }
}
