<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'name', 'email', 'birthdate', 'contract', 'phone', 'photo', 'password', 'id_user',
    ];
    public function patients(){
        return $this->belongsToMany(Patient::class, 'employee_patient')->withPivot('activity_id', 'fecha', 'hora');
    }

    public function activities(){
        return $this->belongsToMany(Activity::class, 'employee_patient')->withPivot('patient_id', 'fecha', 'hora');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
