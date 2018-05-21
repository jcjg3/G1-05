<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ExpedientRequest;

class Expedient extends Model
{
    protected $fillable = [
        'diagnosis','patient_id'
    ];
    public function patients(){
        return $this->belongsTo('App\Patient');
    }

    public function searchExpedient($id){
        $exp = Expedient::find($id);
        return $exp;
    }

    public function updateExpedient(ExpedientRequest $request, $id){
        
        $expedient = $this->searchExpedient($id);
        $expedient->diagnosis = $request->diagnosis;
        $expedient->save();

        return $expedient;

    }

}
