<?php

namespace App\Http\Controllers;
use App\Expedient;
use App\Patient;
use App\Diagnosis;
use App\Http\Requests\ExpedientRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExpedientController extends Controller
{
    //
    public function show($id)
    {
        $exp = new Expedient;
        $expedient = $exp->searchExpedient($id);
        $diagnosis = DB::table('diagnoses')->where('expedients_id',$id)->get();
        return view('expedient.show', compact('expedient'), compact('diagnosis'));
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
        $id_user = Auth::user()->id;
        $id_user = $id_user + 1;
        $diagnosis = new Diagnosis;
        $diagnosis->employee_id = $id_user;
        $diagnosis->expedients_id = $id;
        $diagnosis->comentario = $request->diagnosis;
        $diagnosis->save();
        $diagnosis = DB::table('diagnoses')->where('expedients_id',$id)->get();
        $expedient = $exp->searchExpedient($id);
        return view('expedient.show', compact('expedient'), compact('diagnosis'));
    }
}
