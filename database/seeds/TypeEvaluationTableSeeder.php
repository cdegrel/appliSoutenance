<?php

use Illuminate\Database\Seeder;

class TypeEvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_evaluations')->delete();

        DB::table('type_evaluations')->insert([
            'libelleTypeEvaluation' => 'Soutenance de stage',
            'dureeTypeEvaluation' => '01:00:00'
        ]);
        DB::table('type_evaluations')->insert([
            'libelleTypeEvaluation' => 'Projet tuteuré',
            'dureeTypeEvaluation' => '01:00:00'
        ]);
        DB::table('type_evaluations')->insert([
            'libelleTypeEvaluation' => 'PPP',
            'dureeTypeEvaluation' => '00:15:00'
        ]);
        DB::table('type_evaluations')->insert([
            'libelleTypeEvaluation' => 'Oraux',
            'dureeTypeEvaluation' => '00:30:00'
        ]);
    }
}
