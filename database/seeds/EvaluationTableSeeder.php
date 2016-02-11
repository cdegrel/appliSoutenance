<?php

use Illuminate\Database\Seeder;

class EvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluations')->delete();

        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '4',
            'type_evaluation_id' => '2',
            'salle_id' => '1',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '3',
            'type_evaluation_id' => '1',
            'salle_id' => '5',
        ]);
    }
}
