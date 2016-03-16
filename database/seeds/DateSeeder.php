<?php

use Illuminate\Database\Seeder;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('dates')->delete();

		DB::table('dates')->insert([
			'id' => '2016-03-21'
		]);
        DB::table('dates')->insert([
            'id' => '2016-03-22'
        ]);
        DB::table('dates')->insert([
            'id' => '2016-03-23'
        ]);
        DB::table('dates')->insert([
            'id' => '2016-03-24'
        ]);
    }
}
