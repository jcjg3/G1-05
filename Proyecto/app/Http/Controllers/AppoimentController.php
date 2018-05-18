<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Patient;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AppoimentRequest;

class AppoimentController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $idx = $id - 1;
        $empl = Employee::find($idx);
        $patients = $empl->patients;
        return view('appoiment.index', compact('patients'));
    }
    public function create(Patient $patient)
    {
        return view('appoiment.create', compact('patient'));
    }
    public function store(AppoimentRequest $request){
        $p = new Patient;
        $id = Auth::user()->id;
        $idx = $id - 1;
        $patient = $p->storeAppoiment($request, $idx);
        return redirect()->route('employee.index')->with('info', 'La cita con el paciente cuya id es'.$request->id.' fue guardada.');
    }

}
