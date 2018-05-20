<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Expedient extends Model
{
    protected $fillable = [
        'diagnosis','patient_id'
    ];
    public function patients(){
        return $this->belongsTo('App\Patient');
    }

    public function searchExpedient($id){
        $patient = new Patient;
        $pat = $patient->searchPatient($id);
        return $pat;
    }

}
