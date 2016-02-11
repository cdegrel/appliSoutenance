<?php

use Illuminate\Database\Seeder;

class HeureDebutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('heure_debuts')->delete();

		DB::table('heure_debuts')->insert([
			'id' => '09:00:00'
		]);
		DB::table('heure_debuts')->insert([
			'id' => '10:00:00'
		]);
    }
}
