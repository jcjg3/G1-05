<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    public function list(){
        $records = Record::all();
        return $records;
    }
}
