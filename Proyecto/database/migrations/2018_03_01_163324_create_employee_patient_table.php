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
         Schema::create('employees_patients', function (Blueprint $table) {
            $table->integer('employee_id');
            $table->integer('patient_id');
            $table->date('fecha');
            $table->string('hora');
            $table->Integer('activity_id');
            $table->primary(['patient_id', 'employee_id']);
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('activity_id')->references('id')->on('activities');
 
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
         Schema::dropIfExists('employees_patients');
     }
}
