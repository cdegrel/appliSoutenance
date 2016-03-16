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
            'enseignant_id' => 1,
            'evaluation_id' => 1,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 5,
            'evaluation_id' => 1,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 2,
            'evaluation_id' => 2,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 3,
            'evaluation_id' => 2,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 3,
            'evaluation_id' => 3,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 2,
            'evaluation_id' => 3,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 4,
            'evaluation_id' => 4,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 6,
            'evaluation_id' => 4,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 5,
            'evaluation_id' => 5,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 1,
            'evaluation_id' => 5,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 6,
            'evaluation_id' => 6,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 4,
            'evaluation_id' => 6,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 7,
            'evaluation_id' => 7,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 8,
            'evaluation_id' => 7,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 8,
            'evaluation_id' => 8,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 7,
            'evaluation_id' => 8,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 9,
            'evaluation_id' => 9,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 10,
            'evaluation_id' => 9,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 10,
            'evaluation_id' => 10,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 9,
            'evaluation_id' => 10,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 11,
            'evaluation_id' => 11,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 12,
            'evaluation_id' => 11,
            'role_id' => 2,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 12,
            'evaluation_id' => 12,
            'role_id' => 1,
            'vote' => false,
        ]);
        DB::table('enseignant_evaluation_role')->insert([
            'enseignant_id' => 11,
            'evaluation_id' => 12,
            'role_id' => 2,
            'vote' => false,
        ]);
    }
}
