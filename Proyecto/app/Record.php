<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'diagnosis', 'enclosed',
    ];
    public function patients(){
        return $this->hasOne(Patient::class, 'record_patient');
        
    }
}
