<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic;
use App\Http\Requests\ClinicRequest;
class ClinicController extends Controller
{
    /**
     * Metodo para listar todas las clinicas
     */
    public function index(){
        
        $clinic = new Clinic();
        $clinics = $clinic->list();
        return view('clinics.index',compact('clinics'));
    }
    /**
     * Metodos para mostrar una clinica
     */
    public function show($id){
        $clini = new Clinic();
        $clinic=$clini->search($id);
        return view('clinics.show', compact('clinic'));        
    }
    public function destroy($id){

        $clinic = Clinic::find($id);
        $clinic->delete();
        return back()->with('info', 'La clinica fue eliminada');
    }
    public function edit($id){
        $clini = new Clinic();
        $clinic=$clini->search($id);
        return view('clinics.edit', compact('clinic'));            
    }

    public function create(){
        return view('clinics.create');
    }

    public function update(ClinicRequest $request, $id){
        $clinic = Clinic::find($id);
        $clinic->name = $request->name;
        $clinic->direccion = $request->direccion;
        $clinic->localidad = $request->localidad;
        $clinic->provincia = $request->provincia;
        $clinic->phone = $request->phone;
        $clinic->email = $request->email;
        $clinic->save();
        return redirect()->route('clinics.index')->with('info', 'El usuario '.$request->name.' fue actualizado.');
    }

    public function store(ClinicRequest $request){
        $clinic = new Clinic;
        
        $clinic->name = $request->name;
        $clinic->direccion = $request->direccion;
        $clinic->localidad = $request->localidad;
        $clinic->provincia = $request->provincia;
        $clinic->phone = $request->phone;
        $clinic->email = $request->email;
        $clinic->save();
        return redirect()->route('clinics.index')->with('info', 'El usuario '.$request->name.' fue actualizado.');
    }
  
}
