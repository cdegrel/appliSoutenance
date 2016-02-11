<?php

use Illuminate\Database\Seeder;

class CriteresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criteres')->delete();

        DB::table('criteres')->insert([
            'libelleCritere' => 'Oral'
        ]);
        DB::table('criteres')->insert([
            'libelleCritere' => 'Diapo'
        ]);
        DB::table('criteres')->insert([
            'libelleCritere' => 'Presentation'
        ]);
        DB::table('criteres')->insert([
            'libelleCritere' => 'Projet'
        ]);
    }
}
