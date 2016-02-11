<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnseignantEvaluationRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant_evaluation_role', function (Blueprint $table) {
            $table->integer('enseignant_id')->unsigned();
            $table->integer('evaluation_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->boolean('vote')->default(false);
            $table->timestamps();

            //Foreign key
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
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
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
        Schema::table('enseignant_evaluation_role', function(Blueprint $table) {
            $table->dropForeign('enseignant_evaluation_role_enseignant_id_foreign');
            $table->dropForeign('enseignant_evaluation_role_evaluation_id_foreign');
            $table->dropForeign('enseignant_evaluation_role_role_id_foreign');
        });

        Schema::drop('enseignant_evaluation_role');
    }
}
