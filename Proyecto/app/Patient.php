<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class patient extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'name', 'birthdate', 'disability',
    ];

    public function employees(){
        return $this->belongsToMany(Employee::class, 'employee_patient')->withPivot('activity_id', 'fecha', 'hora');
    }

    public function activities(){
        return $this->belongsToMany(Activity::class, 'employee_patient')->withPivot('employee_id', 'fecha', 'hora');
    }
}

