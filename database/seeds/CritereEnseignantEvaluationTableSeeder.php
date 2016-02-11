<?php

use Illuminate\Database\Seeder;

class CritereEnseignantEvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('critere_enseignant_evaluation')->delete();

        DB::table('critere_enseignant_evaluation')->insert([
            'noteCritere' => 5,
            'critere_id' => 1,
            'enseignant_id' => 4,
            'evaluation_id' => 1
        ]);
        DB::table('critere_enseignant_evaluation')->insert([
            'noteCritere' => 3,
            'critere_id' => 2,
            'enseignant_id' => 4,
            'evaluation_id' => 1
        ]);
        DB::table('critere_enseignant_evaluation')->insert([
            'noteCritere' => 12,
            'critere_id' => 3,
            'enseignant_id' => 4,
            'evaluation_id' => 1
        ]);
        DB::table('critere_enseignant_evaluation')->insert([
            'noteCritere' => 2,
            'critere_id' => 1,
            'enseignant_id' => 3,
            'evaluation_id' => 1
        ]);
        DB::table('critere_enseignant_evaluation')->insert([
            'noteCritere' => 1,
            'critere_id' => 2,
            'enseignant_id' => 3,
            'evaluation_id' => 1
        ]);
        DB::table('critere_enseignant_evaluation')->insert([
            'noteCritere' => 6,
            'critere_id' => 3,
            'enseignant_id' => 3,
            'evaluation_id' => 1
        ]);
    }
}
