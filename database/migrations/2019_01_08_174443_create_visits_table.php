<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctorId')->unsigned();
            $table->integer('patientId')->unsigned();
            $table->date('visitDate');
            $table->time('visitTime');
            $table->float('visitCost');

            $table->foreign('doctorId')->references('doctorId')->on('doctors');
            $table->foreign('patientId')->references('patientId')->on('patients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
