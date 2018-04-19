<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Patient;

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

    public function update(PatientRequest $request, $id)
    {
        $patient = new Patient();
        $patient = $patient->search($id);

        $patient-> birthdate = $request->birthdate;
        $patient-> name= $request->name;
        $patient->disability = $request->disability;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->photo = $request->photo;
        $patient->sexo = $request->sexo;

        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $patient->fill(['photo'=> asset($path)])->save();
        }

        $patient->save();
        return redirect()->route('patient.index')->with('info', 'El paciente '.$request->name.' fue actualizado.');
    }

    public function destroy($id) {

        $patients = Patient::find($id);
        $patients->delete();
        return back()->with('info','paciente eliminado');
    }

    public function store(PatientRequest $request) {
        $patient = new Patient();
        $patient-> birthdate = $request->birthdate;
        $patient-> name= $request->name;
        $patient->disability = $request->disability;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->photo = $request->photo;
        $patient->sexo = $request->sexo;

        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $patient->fill(['photo'=> asset($path)])->save();
        }

        $patient->save();
        return redirect()->route('patient.index')->with('info', 'El paciente '.$request->name.' fue guardado.');
    }
}
