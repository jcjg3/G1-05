<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedient extends Model
{
    protected $fillable = [
        'diagnosis', 'enclosed','patient_id'
    ];
    public function patients(){
        return $this->belongsTo('App\Patient');
    }


}
