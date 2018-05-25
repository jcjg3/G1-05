<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('employee_patient', function (Blueprint $table) {

            $table->integer('employee_id');
            $table->integer('patient_id');
            $table->string('fecha');
            $table->string('hora');
            $table->Integer('activity_id')->nullable();
            $table->primary(['patient_id', 'employee_id', 'fecha', 'hora']);
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->timestamps();
 
            #$table->timestamps();
         });
     }
 
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('employee_patient');
     }
}