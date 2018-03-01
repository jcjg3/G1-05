<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\employee;
use App\activity;
use App\patient;

class employee extends Model
{
        protected $primaryKey = 'DNI';
        public function patients(){
        return $this->belongsToMany(patient::class,'patient_id','DNI');
    }

    /*public function activity(){
        return $this->belongTo(activity::class);
    }*/
}
