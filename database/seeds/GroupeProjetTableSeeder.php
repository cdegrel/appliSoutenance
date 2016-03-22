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
            'rapport' => 'rap_strategie.pdf',
            'enseignant_id' => 1
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Capteurs sans fils',
            'rapport' => 'rap_capteur.pdf',
            'enseignant_id' => 2
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Appli tablette piscine Montbéliard',
            'rapport' => 'rap_piscine.pdf',
            'enseignant_id' => 3
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Aide à l\'évaluation de soutenances',
            'rapport' => 'rap_evaluation.pdf',
            'enseignant_id' => 4
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Générateur de code pour GPU',
            'rapport' => 'rap_generateur.pdf',
            'enseignant_id' => 5
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Application Restaurant',
            'rapport' => 'rap_restaurant.pdf',
            'enseignant_id' => 6
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Jeu Client-Serveur',
            'rapport' => 'rap_jeureseau.pdf',
            'enseignant_id' => 7
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Jeu Stratégie Tower Défense',
            'rapport' => 'rap_towerdefense.pdf',
            'enseignant_id' => 8
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Jeu Plate-forme 2D',
            'rapport' => 'rap_2dplateforme.pdf',
            'enseignant_id' => 9
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Bomberman',
            'rapport' => 'rap_bomberman.pdf',
            'enseignant_id' => 10
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Filtrage d\'appels Rasperry',
            'rapport' => 'rap_filtrage.pdf',
            'enseignant_id' => 11
        ]);
        DB::table('groupe_projets')->insert([
            'libelleSujet' => 'Site dépannage/troc',
            'rapport' => 'rap_depannage.pdf',
            'enseignant_id' => 12
        ]);
    }
}
