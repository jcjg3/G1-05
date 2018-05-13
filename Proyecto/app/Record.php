<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function patient() {
        return $this->belongsTo('App\Patient');
    }
}
