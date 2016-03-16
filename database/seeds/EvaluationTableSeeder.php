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
            'groupe_projet_id' => '1',
            'type_evaluation_id' => '2',
            'salle_id' => '10',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '2',
            'type_evaluation_id' => '2',
            'salle_id' => '9',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '3',
            'type_evaluation_id' => '2',
            'salle_id' => '9',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '4',
            'type_evaluation_id' => '2',
            'salle_id' => '10',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '5',
            'type_evaluation_id' => '2',
            'salle_id' => '10',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '6',
            'type_evaluation_id' => '2',
            'salle_id' => '10',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '7',
            'type_evaluation_id' => '2',
            'salle_id' => '3',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '8',
            'type_evaluation_id' => '2',
            'salle_id' => '3',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '9',
            'type_evaluation_id' => '2',
            'salle_id' => '8',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '10',
            'type_evaluation_id' => '2',
            'salle_id' => '8',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '11',
            'type_evaluation_id' => '2',
            'salle_id' => '7',
        ]);
        DB::table('evaluations')->insert([
            'noteGroupe' => '0',
            'remarqueGroupe' => '',
            'groupe_projet_id' => '12',
            'type_evaluation_id' => '2',
            'salle_id' => '7',
        ]);
    }
}
