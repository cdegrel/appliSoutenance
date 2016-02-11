<?php

use Illuminate\Database\Seeder;

class EnseignantEvaluationRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enseignant_evaluation_role')->delete();

        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 3,
            'evaluation_id' => 1,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 4,
            'evaluation_id' => 1,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 5,
            'evaluation_id' => 2,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 6,
            'evaluation_id' => 2,
            'role_id' => 1,
            'vote' => false,
        ]);
    }
}
