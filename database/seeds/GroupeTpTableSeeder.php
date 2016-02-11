<?php

use Illuminate\Database\Seeder;

class GroupeTpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groupe_tps')->delete();

        DB::table('groupe_tps')->insert([
            'libelleGroupeTP' => 'A1'
        ]);
        DB::table('groupe_tps')->insert([
            'libelleGroupeTP' => 'A2'
        ]);
        DB::table('groupe_tps')->insert([
            'libelleGroupeTP' => 'B1'
        ]);
        DB::table('groupe_tps')->insert([
            'libelleGroupeTP' => 'B2'
        ]);
        DB::table('groupe_tps')->insert([
            'libelleGroupeTP' => 'C1'
        ]);
        DB::table('groupe_tps')->insert([
            'libelleGroupeTP' => 'C2'
        ]);
    }
}
