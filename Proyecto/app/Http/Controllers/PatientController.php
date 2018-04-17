<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    //
    public function index(){

        $patients = Patient::orderBy('id','DESC')->paginate();

        return view('patient.index',compact('patients'));
    }

    public function show($id){
        $patient =  Patient::find($id);
        
        return view('patient.show',compact('patient'));

    }

    public function destroy($id){

        $patients = Patient::find($id);
        $patients->delete();
        return back()->with('info','paciente eliminado');
    }
}
