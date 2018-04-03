<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $fillable = [
        'name', 'direccion', 'localidad', 'provincia', 'phone', 'email',
    ];
    public function employees(){
        return $this->hasMany(Employee::class, 'clinic_employee');
    }

}
