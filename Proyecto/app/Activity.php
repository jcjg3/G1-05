<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    public function patients(){
        return $this->belongsToMany(Patient::class, 'employee_patient')->withPivot('employee_id', 'fecha', 'hora');
    }

    public function employees(){
        return $this->belongsToMany(Employee::class, 'employee_patient')->withPivot('patient_id', 'fecha', 'hora');
    }
}
