<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Patient;
use App\User;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Calendar;
=======
use App\Http\Requests\AppoimentRequest;
>>>>>>> b476db645645ce1467dac0659354af92efdcd006

class AppoimentController extends Controller
{
    public function index()
    {
        /*
        $id = Auth::user()->id;
        $idx = $id - 1;
        $empl = Employee::find($idx);
        $patients = $empl->patients;
        return view('appoiment.index', compact('patients'));
        */
        $ids = Auth::user()->id;
        $usuario = User::find($ids);
        $empls = Employee::all();
        $esemp = NULL;
        
        foreach ($empls as $emp){
            if($usuario->id == $emp->user_id){
                $esemp = $emp;
                break;
            }
        }
        
        
        $data = $esemp->patients;
        $events = [];
        if($data->count()) {
            foreach ($data as $value) {
                $events[] = Calendar::event(
                    $value->pivot->patient_id,
                    true,
                    new \DateTime($value->pivot->fecha),
                    new \DateTime($value->pivot->fecha),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => 'pass here url and any route',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('appoiment.index', compact('calendar'));
        
        
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
