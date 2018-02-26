<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities_doctors', function (Blueprint $table) {
            #$table->increments('id');
            $table->string('doctor_id');
            $table->integer('activity_id');
            $table->primary(['doctor_id','activity_id']);
            $table->foreign('doctor_id')->references('DNI')->on('doctors');
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
        Schema::dropIfExists('activities_doctors');
    }
}
