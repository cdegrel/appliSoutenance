<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCritereEnseignantEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critere_enseignant_evaluation', function (Blueprint $table) {
            $table->integer('noteCritere');
            $table->integer('critere_id')->unsigned();
            $table->integer('enseignant_id')->unsigned();
            $table->integer('evaluation_id')->unsigned();
            $table->timestamps();

            //Foreign key
            $table->foreign('critere_id')
                ->references('id')
                ->on('criteres')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('enseignant_id')
                ->references('id')
                ->on('enseignants')
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
        Schema::table('critere_enseignant_evaluation', function(Blueprint $table) {
            $table->dropForeign('critere_enseignant_evaluation_critere_id_foreign');
            $table->dropForeign('critere_enseignant_evaluation_enseignant_id_foreign');
            $table->dropForeign('critere_enseignant_evaluation_evaluation_id_foreign');
        });

        Schema::drop('critere_enseignant_evaluation');
    }
}
