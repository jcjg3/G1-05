<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic;
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
        return view('clinic.show', contract('clinic'));        
    }
    public function destroy($id){

        $clinic = Clinic::find($id);
        $clinic->delete();
        return back()->with('info', 'La clinica fue eliminada');
    }

  
}
