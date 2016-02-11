<?php

use Illuminate\Database\Seeder;

class EnseignantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enseignants')->delete();

        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Hakem',
            'prenomEnseignant' => 'Mourad',
            'photoEnseignant' => 'mouradHakem.png',
            'admin' => false,
            'login' => 'mhakem',
            'email' => 'mourad.hakem@univ-fcomte.fr',
            'password' => Hash::make('12345678'),

        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Charr',
            'prenomEnseignant' => 'Jean-Claude',
            'photoEnseignant' => 'jeanclaudeCharr.png',
            'admin' => false,
            'login' => 'jccharr',
            'email' => 'jean-claude.charr@univ-fcomte.fr',
            'password' => Hash::make('12345678'),

        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Ambert',
            'prenomEnseignant' => 'Fabrice',
            'photoEnseignant' => 'fabriceAmbert.png',
            'admin' => false,
            'login' => 'fambert',
            'email' => 'fabrice.ambert@univ-fcomte.fr',
            'password' => Hash::make('12345678'),

        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Deschinkel',
            'prenomEnseignant' => 'Karine',
            'photoEnseignant' => 'karineDeschinkel.png',
            'admin' => true,
            'login' => 'kdeschin',
            'email' => 'karine.deschinkel@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Perrot',
            'prenomEnseignant' => 'Gilles',
            'photoEnseignant' => 'gillesPerrot.png',
            'admin' => false,
            'login' => 'gperrot',
            'email' => 'gilles.perrot@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Laiymani',
            'prenomEnseignant' => 'David',
            'photoEnseignant' => 'davidLaiymani.png',
            'admin' => true,
            'login' => 'dlaiymani',
            'email' => 'david.laiymani@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Makhoul',
            'prenomEnseignant' => 'Abdallah',
            'photoEnseignant' => 'abdallahMakhoul.png',
            'admin' => false,
            'login' => 'amakhoul',
            'email' => 'abdallah.makhoul@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'H�am',
            'prenomEnseignant' => 'Piere-Cyril',
            'photoEnseignant' => 'pierrecyrilHeam.png',
            'admin' => false,
            'login' => 'pcheam',
            'email' => 'pierre-cyril.heam@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Fouzi',
            'prenomEnseignant' => 'Miloud',
            'photoEnseignant' => 'miloudFouzi.png',
            'admin' => false,
            'login' => 'mfouzi',
            'email' => 'miloud.fouzi@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Couturier',
            'prenomEnseignant' => 'Raphael',
            'photoEnseignant' => 'raphaelCouturier.png',
            'admin' => false,
            'login' => 'rcouturi',
            'email' => 'raphael.couturier@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Salomon',
            'prenomEnseignant' => 'Michel',
            'photoEnseignant' => 'michelSalomon.png',
            'admin' => false,
            'login' => 'msalomon',
            'email' => 'michel.salomon@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Millet',
            'prenomEnseignant' => 'Alain',
            'photoEnseignant' => 'alainMillet.png',
            'admin' => false,
            'login' => 'amillet',
            'email' => 'alain.millet@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('enseignants')->insert([
            'nomEnseignant' => 'Paterlini',
            'prenomEnseignant' => 'Corinne',
            'photoEnseignant' => 'corrinePaterlini.png',
            'admin' => false,
            'login' => 'cpaterli',
            'email' => 'corinne.paterlini@univ-fcomte.fr',
            'password' => Hash::make('12345678'),
        ]);
    }
}
