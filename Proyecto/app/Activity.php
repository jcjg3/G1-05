<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
/*
 $table->string('name');
            $table->string('description');
            $table->integer('votes');
*/
    protected $fillable = [
        'name', 'description', 'votes',
    ];

    public function patients(){
        return $this->belongsToMany(Patient::class, 'employee_patient')->withPivot('employee_id', 'fecha', 'hora');
    }

    public function employees(){
        return $this->belongsToMany(Employee::class, 'employee_patient')->withPivot('patient_id', 'fecha', 'hora');
    }
}
