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
			'date_id' => '2016-03-23',
			'evaluation_id' => 1,
			'heure_debut_id' => '12:30:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 2,
			'heure_debut_id' => '13:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 3,
			'heure_debut_id' => '14:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 4,
			'heure_debut_id' => '13:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-23',
			'evaluation_id' => 5,
			'heure_debut_id' => '13:30:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 6,
			'heure_debut_id' => '14:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 7,
			'heure_debut_id' => '13:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 8,
			'heure_debut_id' => '14:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 9,
			'heure_debut_id' => '13:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 10,
			'heure_debut_id' => '14:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 11,
			'heure_debut_id' => '13:00:00'
		]);
		DB::table('date_evaluations_heure_debut')->insert([
			'date_id' => '2016-03-24',
			'evaluation_id' => 12,
			'heure_debut_id' => '14:00:00'
		]);
    }
}
