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
        $exp = new Expedient;
        $patient = $exp->searchExpedient($id);
        return view('expedient.show', compact('patient'));
     }
     //NO FUNCIONA NI PARA ATRÁS 
    public function edit ($id){
        $exp = new Expedient;
        $expedient = $exp->searchExpedient($id);
        return view('expedient.edit',compact('expedient'));
    }

}
