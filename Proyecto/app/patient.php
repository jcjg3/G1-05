<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\employee;
use App\activity;
use App\patient;

class patient extends Model
{
    protected $primaryKey = 'DNI';
    public function employees(){
        return $this->belongsToMany(employee::class,'employee_id','DNI');
    }

    /*public function activity(){
        return $this->belongTo(activity::class);
    }*/
}

