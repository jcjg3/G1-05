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
             $table->date('fecha');
             $table->string('hora');
             $table->string('patient_id');
             $table->string('employee_id');
             //$table->Integer('activity_id');
             $table->primary([/*'fecha','hora',*/'employee_id', 'patient_id'/*,'activity_id'*/]);
             $table->foreign('patient_id')->references('DNI')->on('patients');
             $table->foreign('employee_id')->references('DNI')->on('employees');
             //$table->foreign('activity_id')->references('id')->on('activities');
 
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
