<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomEtudiant',30);
            $table->string('prenomEtudiant',30);
            $table->string('photoEtudiant',30)->unique();
//            $table->char('login',8)->unique();
//            $table->string('email')->unique();
//            $table->string('password',60);
            $table->integer('semestre_id')->unsigned();
            $table->integer('groupe_tp_id')->unsigned();
            $table->integer('groupe_projet_id')->unsigned();
            $table->timestamps();

            //Foreign key
            $table->foreign('semestre_id')
                ->references('id')
                ->on('semestres')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('groupe_tp_id')
                ->references('id')
                ->on('groupe_tps')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('groupe_projet_id')
                ->references('id')
                ->on('groupe_projets')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etudiants', function(Blueprint $table){
            $table->dropForeign('etudiants_semestre_id_foreign');
            $table->dropForeign('etudiants_groupe_tp_id_foreign');
            $table->dropForeign('etudiants_groupe_projet_id_foreign');
        });

        Schema::drop('etudiants');
    }
}
