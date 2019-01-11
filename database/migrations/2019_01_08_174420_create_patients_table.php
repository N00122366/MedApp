<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('patientId');
            $table->string('name');
            $table->string('address');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('insurance');
            $table->string('companyName')->nullable();
            $table->integer('policyNumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
