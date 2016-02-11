<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_evaluation', function (Blueprint $table) {
            $table->float('noteIndividuelle');
            $table->text('remarqueIndividuelle');
            $table->integer('etudiant_id')->unsigned();
            $table->integer('evaluation_id')->unsigned();
            $table->timestamps();

            //Foreign key
            $table->foreign('etudiant_id')
                ->references('id')
                ->on('etudiants')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('evaluation_id')
                ->references('id')
                ->on('evaluations')
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
        Schema::table('etudiant_evaluation', function(Blueprint $table) {
            $table->dropForeign('etudiant_evaluation_etudiant_id_foreign');
            $table->dropForeign('etudiant_evaluation_evaluation_id_foreign');
        });

        Schema::drop('etudiant_evaluation');
    }
}
