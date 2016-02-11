<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDateEvaluationHeureDebutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_evaluations_heure_debut', function (Blueprint $table) {
            $table->date('date_id');
            $table->integer('evaluation_id')->unsigned();
            $table->time('heure_debut_id');
            $table->timestamps();

            //Foreign key
            $table->foreign('date_id')
                ->references('id')
                ->on('dates')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('evaluation_id')
                ->references('id')
                ->on('evaluations')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('heure_debut_id')
                ->references('id')
                ->on('heure_debuts')
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
        Schema::table('date_evaluations_heure_debut', function(Blueprint $table) {
            $table->dropForeign('date_evaluations_heure_debut_date_id_foreign');
            $table->dropForeign('date_evaluations_heure_debut_evaluation_id_foreign');
            $table->dropForeign('date_evaluations_heure_debut_heure_debut_id_foreign');
        });

        Schema::drop('date_evaluations_heure_debut');
    }
}
