<?php

use Illuminate\Database\Seeder;

class CritereTypeEvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('critere_type_evaluation')->delete();

        DB::table('critere_type_evaluation')->insert([
            'poids' => 5,
            'critere_id' => 1,
            'type_evaluation_id' => 1
        ]);
        DB::table('critere_type_evaluation')->insert([
            'poids' => 3,
            'critere_id' => 2,
            'type_evaluation_id' => 1
        ]);
        DB::table('critere_type_evaluation')->insert([
            'poids' => 5,
            'critere_id' => 3,
            'type_evaluation_id' => 1
        ]);
        DB::table('critere_type_evaluation')->insert([
            'poids' => 7,
            'critere_id' => 4,
            'type_evaluation_id' => 1
        ]);
        DB::table('critere_type_evaluation')->insert([
            'poids' => 5,
            'critere_id' => 1,
            'type_evaluation_id' => 2
        ]);
        DB::table('critere_type_evaluation')->insert([
            'poids' => 3,
            'critere_id' => 2,
            'type_evaluation_id' => 2
        ]);
        DB::table('critere_type_evaluation')->insert([
            'poids' => 12,
            'critere_id' => 3,
            'type_evaluation_id' => 2
        ]);
    }
}
