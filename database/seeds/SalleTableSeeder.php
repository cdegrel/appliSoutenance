<?php

use Illuminate\Database\Seeder;

class SalleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salles')->delete();

        DB::table('salles')->insert([
            'libelleSalle' => '006'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '007'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '101'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '102'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '103'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '104'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '105'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '106'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '107'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '108'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '109'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '205'
        ]);
        DB::table('salles')->insert([
            'libelleSalle' => '208'
        ]);
    }
}
