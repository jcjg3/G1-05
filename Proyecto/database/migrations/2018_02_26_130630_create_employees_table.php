<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->date('birthdate');
           $table->string('email');
           $table->string('contract');
           $table->string('phone');
           $table->string('photo')->nullable();
           $table->string('clinic_id')->nullable();
           $table->foreign('clinic_id')->references('id')->on('clinic');
           $table->string('password');
           $table->integer('user_id')->nullable();
           $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('employees');
    }
}
