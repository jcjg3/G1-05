<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'name', 'birthdate', 'disability','phone', 'address' , 'photo', 'sexo'
    ];

    public function employees(){
        return $this->belongsToMany(Employee::class, 'employee_patient')->withPivot('activity_id', 'fecha', 'hora');
    }

    public function activities(){
        return $this->belongsToMany(Activity::class, 'employee_patient')->withPivot('employee_id', 'fecha', 'hora');
    }

    public function search($id){
        return $patient = Patient::find($id);
    }

    public function list(){
        $patients = Patient::all();
        return $patients;
    }
}
