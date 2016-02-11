<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCritereTypeEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critere_type_evaluation', function (Blueprint $table) {
            $table->integer('poids');
            $table->integer('critere_id')->unsigned();
            $table->integer('type_evaluation_id')->unsigned();
            $table->timestamps();

            //Foreign key
            $table->foreign('critere_id')
                ->references('id')
                ->on('criteres')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('type_evaluation_id')
                ->references('id')
                ->on('type_evaluations')
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
        Schema::table('critere_type_evaluation', function(Blueprint $table) {
            $table->dropForeign('critere_type_evaluation_critere_id_foreign');
            $table->dropForeign('critere_type_evaluation_type_evaluation_id_foreign');
        });

        Schema::drop('critere_type_evaluation');
    }
}
