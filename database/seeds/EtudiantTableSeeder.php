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
            'semestre_id' => 3,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Belloncle',
            'prenomEtudiant' => 'Renaud',
            'photoEtudiant' => 'renaudBelloncle.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bas',
            'prenomEtudiant' => 'Jordan',
            'photoEtudiant' => 'jordanBas.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Febvre',
            'prenomEtudiant' => 'Antoine',
            'photoEtudiant' => 'antoineFebvre.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bige',
            'prenomEtudiant' => 'Mégane',
            'photoEtudiant' => 'bigeMegane.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 1
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Fabry',
            'prenomEtudiant' => 'Nathan',
            'photoEtudiant' => 'nathanFabry.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 2
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'François',
            'prenomEtudiant' => 'Victor',
            'photoEtudiant' => 'victorFrancois.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 2
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Gauthier',
            'prenomEtudiant' => 'Thomas',
            'photoEtudiant' => 'thomasGauthier.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 2
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Sif',
            'prenomEtudiant' => 'Mael',
            'photoEtudiant' => 'maelSif.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 1,
            'groupe_projet_id' => 2
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Runser',
            'prenomEtudiant' => 'Jonathan',
            'photoEtudiant' => 'jonathanRunser.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bolard',
            'prenomEtudiant' => 'Clément',
            'photoEtudiant' => 'clementBolard.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Pasteur',
            'prenomEtudiant' => 'Loic',
            'photoEtudiant' => 'loicPasteur.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Grosjean',
            'prenomEtudiant' => 'Yann',
            'photoEtudiant' => 'yannGrosjean.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Lamy',
            'prenomEtudiant' => 'Louis_Victor',
            'photoEtudiant' => 'louisvictorLamy.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Rhanizar',
            'prenomEtudiant' => 'Aymane',
            'photoEtudiant' => 'aymaneRhanizar.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 3,
            'groupe_projet_id' => 3
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Degrelle',
            'prenomEtudiant' => 'Cédric',
            'photoEtudiant' => 'cedricDegrelle.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Cretin',
            'prenomEtudiant' => 'Gaëtan',
            'photoEtudiant' => 'gaetanCretin.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Bonnal',
            'prenomEtudiant' => 'Valentin',
            'photoEtudiant' => 'valentinBonnal.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Lehmann',
            'prenomEtudiant' => 'Thomas',
            'photoEtudiant' => 'thomasLehmann.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
        DB::table('etudiants')->insert([
            'nomEtudiant' => 'Perrin',
            'prenomEtudiant' => 'Thibaud',
            'photoEtudiant' => 'thibaudPerrin.png',
            'semestre_id' => 3,
            'groupe_tp_id' => 4,
            'groupe_projet_id' => 4
        ]);
    }
}
