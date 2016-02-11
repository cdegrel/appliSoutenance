<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupeProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelleSujet',50)->unique();
            $table->integer('enseignant_id')->unsigned();
            $table->timestamps();

            //Foreign key
            $table->foreign('enseignant_id')
                ->references('id')
                ->on('enseignants')
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
        Schema::table('groupe_projets', function(Blueprint $table){
            $table->dropForeign('groupe_projets_enseignant_id_foreign');
        });

        Schema::drop('groupe_projets');
    }
}
