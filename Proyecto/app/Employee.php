<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'name', 'email', 'birthdate', 'contract', 'phone', 'photo', 'clinic',
    ];
    public function patients(){
        return $this->belongsToMany(Patient::class, 'employee_patient')->withPivot('activity_id', 'fecha', 'hora');
    }

    public function activities(){
        return $this->belongsToMany(Activity::class, 'employee_patient')->withPivot('patient_id', 'fecha', 'hora');
    }

    public function clinics(){
        return $this->belongTo(Clinic::class, 'clinic_employee');
    }
    
}
