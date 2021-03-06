<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('SemestreTableSeeder');
        $this->call('GroupeTpTableSeeder');
        $this->call('SalleTableSeeder');
        $this->call('EnseignantTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('TypeEvaluationTableSeeder');
        $this->call('GroupeProjetTableSeeder');
        $this->call('EtudiantTableSeeder');
        $this->call('CriteresTableSeeder');
        $this->call('CritereTypeEvaluationTableSeeder');
        $this->call('DateSeeder');
        $this->call('HeureDebutSeeder');
        $this->call('EvaluationTableSeeder');
        $this->call('DateEvaluationHeureDebutSeeder');
        $this->call('EnseignantEvaluationRoleTableSeeder');

        Model::reguard();
    }
}
