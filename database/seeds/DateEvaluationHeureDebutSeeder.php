<?php

use Illuminate\Database\Seeder;

class DateEvaluationHeureDebutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('date_evaluations_heure_debut')->delete();

		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-01-01',
			'evaluation_id' => 1,
			'heure_debut_id' => '09:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-01-01',
			'evaluation_id' => 2,
			'heure_debut_id' => '10:00:00'
		]);
    }
}
