<?php

use Illuminate\Database\Seeder;

class EtudiantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etudiants')->delete();

        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Roy',
            'prenomEtudiant' => 'Nicolas',
            'photoEtudiant' => 'nicolasRoy.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Belloncle',
            'prenomEtudiant' => 'Renaud',
            'photoEtudiant' => 'renaudBelloncle.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bas',
            'prenomEtudiant' => 'Jordan',
            'photoEtudiant' => 'jordanBas.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Febvre',
            'prenomEtudiant' => 'Antoine',
            'photoEtudiant' => 'antoineFebvre.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bige',
            'prenomEtudiant' => 'Mégane',
            'photoEtudiant' => 'bigeMegane.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        /****************************************/
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Caron',
            'prenomEtudiant' => 'Gwenael',
            'photoEtudiant' => 'gwenaelCaron.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 2
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Fabry',
            'prenomEtudiant' => 'Nathan',
            'photoEtudiant' => 'nathanFabry.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 2
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'François',
            'prenomEtudiant' => 'Victor',
            'photoEtudiant' => 'victorFrancois.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 2
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Gauthier',
            'prenomEtudiant' => 'Thomas',
            'photoEtudiant' => 'thomasGauthier.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 2
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Sif',
            'prenomEtudiant' => 'Mael',
            'photoEtudiant' => 'maelSif.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 2
        ]);
        /****************************************/
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Runser',
            'prenomEtudiant' => 'Jonathan',
            'photoEtudiant' => 'jonathanRunser.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bolard',
            'prenomEtudiant' => 'Clément',
            'photoEtudiant' => 'clementBolard.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Pasteur',
            'prenomEtudiant' => 'Loic',
            'photoEtudiant' => 'loicPasteur.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Grosjean',
            'prenomEtudiant' => 'Yann',
            'photoEtudiant' => 'yannGrosjean.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Lamy',
            'prenomEtudiant' => 'Louis_Victor',
            'photoEtudiant' => 'louisvictorLamy.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Rhanizar',
            'prenomEtudiant' => 'Aymane',
            'photoEtudiant' => 'aymaneRhanizar.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        /****************************************/
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Degrelle',
            'prenomEtudiant' => 'Cédric',
            'photoEtudiant' => 'cedricDegrelle.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Cretin',
            'prenomEtudiant' => 'Gaëtan',
            'photoEtudiant' => 'gaetanCretin.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bonnal',
            'prenomEtudiant' => 'Valentin',
            'photoEtudiant' => 'valentinBonnal.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Lehmann',
            'prenomEtudiant' => 'Thomas',
            'photoEtudiant' => 'thomasLehmann.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Perrin',
            'prenomEtudiant' => 'Thibaud',
            'photoEtudiant' => 'thibaudPerrin.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
        /****************************************/
      	DB::table('etudiants')->insert([
            'nomEtudiant' => 'Abegg',
            'prenomEtudiant' => 'Jean-Philippe',
            'photoEtudiant' => 'jeanphilippeAbegg.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 5
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Detiege',
            'prenomEtudiant' => 'Jean-Philippe',
            'photoEtudiant' => 'jeanphilippeDetiege.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 5
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Petit',
            'prenomEtudiant' => 'Antide',
            'photoEtudiant' => 'antidePetit.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 5
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Vaucoret',
            'prenomEtudiant' => 'Adam',
            'photoEtudiant' => 'adamVaucoret.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 5
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Viennet',
            'prenomEtudiant' => 'William',
            'photoEtudiant' => 'williamVienet.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 5
        ]);
        /****************************************/
      	DB::table('etudiants')->insert([
            'nomEtudiant' => 'Barreto',
            'prenomEtudiant' => 'Luiz Fernando',
            'photoEtudiant' => 'luizfernandoBarreto.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 6
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Lechine',
            'prenomEtudiant' => 'Henry',
            'photoEtudiant' => 'henryLechine.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 6
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Lustig',
            'prenomEtudiant' => 'Florian',
            'photoEtudiant' => 'florianLustig.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 6
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Nguyen',
            'prenomEtudiant' => 'Lan Lynn',
            'photoEtudiant' => 'lanlynnNguyen.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 6
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Perciballi',
            'prenomEtudiant' => 'Axel',
            'photoEtudiant' => 'axelPerciballi.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 6
        ]);
        /****************************************/
      	DB::table('etudiants')->insert([
            'nomEtudiant' => 'Milleret',
            'prenomEtudiant' => 'Jehan',
            'photoEtudiant' => 'jehanMilleret.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 7
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Stehly-Calisto',
            'prenomEtudiant' => 'Vincent',
            'photoEtudiant' => 'vicentStehlycalisto.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 7
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Pourchot',
            'prenomEtudiant' => 'Mathieu',
            'photoEtudiant' => 'mathieuPourchot.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 7
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Pierrat',
            'prenomEtudiant' => 'Lucas',
            'photoEtudiant' => 'lucasPierrat.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 7
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Perreira',
            'prenomEtudiant' => 'Rémi',
            'photoEtudiant' => 'remiPerreira.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 7
        ]);
        /****************************************/
      	DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bacha',
            'prenomEtudiant' => 'Ismael',
            'photoEtudiant' => 'ismaelBacha.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 8
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Masoni',
            'prenomEtudiant' => 'Valentin',
            'photoEtudiant' => 'valentinMasoni.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 8
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Molina',
            'prenomEtudiant' => 'Kiéran',
            'photoEtudiant' => 'kieranMolina.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 8
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Rossdeutsch',
            'prenomEtudiant' => 'Nicolas',
            'photoEtudiant' => 'nicolasRossdeutsch.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 8
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Vavasseur',
            'prenomEtudiant' => 'Maxime',
            'photoEtudiant' => 'maximeVavasseur.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 8
        ]);
        /****************************************/
      	DB::table('etudiants')->insert([
            'nomEtudiant' => 'Hecht',
            'prenomEtudiant' => 'Adam',
            'photoEtudiant' => 'adamHecht.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 9
        ]);
      	DB::table('etudiants')->insert([
            'nomEtudiant' => 'Janod',
            'prenomEtudiant' => 'Lucie',
            'photoEtudiant' => 'lucieJanod.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 9
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Meyer',
            'prenomEtudiant' => 'Lucas',
            'photoEtudiant' => 'lucasMeyer.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 9
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Heckenhauer',
            'prenomEtudiant' => 'Robin',
            'photoEtudiant' => 'robinHeckenhauer.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 9
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Ducroz',
            'prenomEtudiant' => 'Jules',
            'photoEtudiant' => 'julesDucroz.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 9
        ]);
        /****************************************/
      	DB::table('etudiants')->insert([
            'nomEtudiant' => 'Daloz',
            'prenomEtudiant' => 'Thomas',
            'photoEtudiant' => 'thomasDaloz.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 10
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Royer',
            'prenomEtudiant' => 'Félix',
            'photoEtudiant' => 'felixRoyer.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 10
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Crelier',
            'prenomEtudiant' => 'Nicolas',
            'photoEtudiant' => 'nicolasCrelier.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 10
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Lim',
            'prenomEtudiant' => 'Richard',
            'photoEtudiant' => 'richardLim.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 10
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Van Der Post',
            'prenomEtudiant' => 'Johan',
            'photoEtudiant' => 'johanVanderpost.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 10
        ]);
        /****************************************/
      	DB::table('etudiants')->insert([
            'nomEtudiant' => 'Pelletier',
            'prenomEtudiant' => 'Anthony',
            'photoEtudiant' => 'anthonyPelletier.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 11
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Huot',
            'prenomEtudiant' => 'Gaël',
            'photoEtudiant' => 'gaelHuot.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 11
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Menegain',
            'prenomEtudiant' => 'Mathieu',
            'photoEtudiant' => 'mathieuMenegain.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 11
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Duguet',
            'prenomEtudiant' => 'Jerome',
            'photoEtudiant' => 'jeromeDuguet.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 11
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Zouhairi',
            'prenomEtudiant' => 'Zakaria',
            'photoEtudiant' => 'zakariaZouhairi.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 11
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Cevik',
            'prenomEtudiant' => 'Osman',
            'photoEtudiant' => 'osmanCevik.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 11
        ]);
        /****************************************/
      	DB::table('etudiants')->insert([
            'nomEtudiant' => 'Jossic',
            'prenomEtudiant' => 'Alfred',
            'photoEtudiant' => 'alfredJossic.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 12
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Ielsch',
            'prenomEtudiant' => 'Stéphane',
            'photoEtudiant' => 'stephaneIelch.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 12
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Sendral',
            'prenomEtudiant' => 'Maxence',
            'photoEtudiant' => 'maxenceSendral.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 12
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bland',
            'prenomEtudiant' => 'Gaëtan',
            'photoEtudiant' => 'gaetanBland.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 12
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Raphat',
            'prenomEtudiant' => 'Reynald',
            'photoEtudiant' => 'reynaldRaphat.png',
            'semestre_id' => 4,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 12
        ]);
    }
}
