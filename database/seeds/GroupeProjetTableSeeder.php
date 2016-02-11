<?php

use Illuminate\Database\Seeder;

class GroupeProjetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groupe_projets')->delete();

        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Jeu stratégie',
            'enseignant_id' => 1
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Capteurs sans fils',
            'enseignant_id' => 2
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Appli tablette piscine Montbéliard',
            'enseignant_id' => 3
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Aide à l\'évaluation de soutenances',
            'enseignant_id' => 4
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Générateur de code pour GPU',
            'enseignant_id' => 5
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Application Restaurant',
            'enseignant_id' => 6
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Jeu Client-Serveur',
            'enseignant_id' => 7
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Jeu Stratégie Tower Défense',
            'enseignant_id' => 8
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Jeu Plate-forme 2D',
            'enseignant_id' => 9
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Bomberman',
            'enseignant_id' => 10
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Filtrage d\'appels Rasperry',
            'enseignant_id' => 11
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Site dépannage/troc',
            'enseignant_id' => 12
        ]);
    }
}
