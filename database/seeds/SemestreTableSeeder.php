<?php

use Illuminate\Database\Seeder;

class SemestreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semestres')->delete();

        for($i=1; $i <= 4; $i++)
        {
            DB::table('semestres')->insert([
                'libelleSemestre' => 'S'.$i
            ]);
        }
    }
}
