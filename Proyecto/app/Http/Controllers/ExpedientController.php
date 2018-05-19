<?php

namespace App\Http\Controllers;
use App\Expedient;
use App\Patient;

use Illuminate\Http\Request;

class ExpedientController extends Controller
{
    //
    public function show($id)
    {
        $patient = new Patient;
        $found = $patient->searchPatient($id);
        return view('expedient.show', compact('found'));
    }

}
