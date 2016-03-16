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
            'id' => '08:00:00'
        ]);
		DB::table('heure_debuts')->insert([
			'id' => '09:00:00'
		]);
		DB::table('heure_debuts')->insert([
			'id' => '10:00:00'
		]);
        DB::table('heure_debuts')->insert([
            'id' => '11:00:00'
        ]);
        DB::table('heure_debuts')->insert([
            'id' => '12:00:00'
        ]);
        DB::table('heure_debuts')->insert([
            'id' => '12:30:00'
        ]);
        DB::table('heure_debuts')->insert([
            'id' => '13:00:00'
        ]);
        DB::table('heure_debuts')->insert([
            'id' => '13:30:00'
        ]);
        DB::table('heure_debuts')->insert([
            'id' => '14:00:00'
        ]);
        DB::table('heure_debuts')->insert([
            'id' => '15:00:00'
        ]);
        DB::table('heure_debuts')->insert([
            'id' => '16:00:00'
        ]);
        DB::table('heure_debuts')->insert([
            'id' => '17:00:00'
        ]);
    }
}
