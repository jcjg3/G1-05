<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Patient;
use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{
    public function index() {

        $patient = new Patient();
        $patients = $patient->list();
        return view('patient.index',compact('patients'));
    }

    public function show($id) {
        $patient =  Patient::find($id);
        
        return view('patient.show',compact('patient'));
    }

    public function create() {
        return view('patient.create');
    }

    public function edit($id)
    {
        $patient = new Patient;
        $patient = $patient->search($id);
        return view('patient.edit', compact('patient'));
    }

    public function destroy($id) {

        $patients = Patient::find($id);
        $patients->delete();
        return back()->with('info','paciente eliminado');
    }

    public function edit($id){
        $p = new Patient;
        $patient = $p->searchPatient($id);

        return view('patient.edit', compact('patient'));
    }

    public function create(){
        return view('patient.create');

    }
    public function store(PatientRequest $request){
        $p = new Patient;
        $patient = $p->storePatient($request);
        return redirect()->route('patient.index')->with('info', 'El paciente '.$request->name.' fue guardado.');
    }

    public function update(PatientRequest $request, $id){
        $p = new Patient;
        $patient = $p->updatePatient($request,$id);
        return redirect()->route('patient.index')->with('info', 'El paciente '.$request->name.' fue actualizado.');
    }
}
