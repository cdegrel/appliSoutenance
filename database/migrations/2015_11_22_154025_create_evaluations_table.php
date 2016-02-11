<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->float('noteGroupe');
            $table->text('remarqueGroupe');
            $table->integer('groupe_projet_id')->unsigned();
            $table->integer('type_evaluation_id')->unsigned();
            $table->integer('salle_id')->unsigned();
            $table->timestamps();

            //Foreign key
            $table->foreign('groupe_projet_id')
                ->references('id')
                ->on('groupe_projets')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('type_evaluation_id')
                ->references('id')
                ->on('type_evaluations')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('salle_id')
                ->references('id')
                ->on('salles')
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
        Schema::table('evaluations', function(Blueprint $table){
            $table->dropForeign('evaluations_groupe_projet_id_foreign');
            $table->dropForeign('evaluations_type_evaluation_id_foreign');
            $table->dropForeign('evaluations_salle_id_foreign');
        });

        Schema::drop('evaluations');
    }
}
