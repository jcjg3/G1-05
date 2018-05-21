<?php

namespace App\Http\Controllers;
use App\Expedient;
use App\Patient;
use App\Http\Requests\ExpedientRequest;


use Illuminate\Http\Request;

class ExpedientController extends Controller
{
    //
    public function show($id)
    {
        $exp = new Expedient;
        $expedient = $exp->searchExpedient($id);
        return view('expedient.show', compact('expedient'));
     }
     
    public function edit ($id){
        $exp = new Expedient;
        $expedient = $exp->searchExpedient($id);
        return view('expedient.edit',compact('expedient'));
    }
    public function store(ExpedientRequest $request){
        $exp = new Expedient;
        $expedient = $exp->storeExpedient($request);
        return redirect()->route('expedient.show');
    }
    public function update(ExpedientRequest $request , $id){
        $exp = new Expedient;
        $expedient = $exp->updateExpedient($request,$id);
        return redirect()->route('expedient.show',compact('expedient'));
    }
}
