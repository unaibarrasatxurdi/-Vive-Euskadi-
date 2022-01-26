<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgrupaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Agrupa', function (Blueprint $table) {
            $table->integer('IdPlanificacion')->unsigned();
            $table->string('DocumentName');
            $table->foreign('DocumentName')->references('DocumentName')->on('Planes')->onUpdate('cascade');
            $table->foreign('IdPlanificacion')->references('IdPlanificacion')->on('Planificacion')->onUpdate('cascade');
            $table->primary(['IdPlanificacion', 'DocumentName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Agrupa');
    }
}
