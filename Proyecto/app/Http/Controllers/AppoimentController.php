<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AppoimentRequest;
use App\Employee;
use App\User;
use App\Patient;
use App\Activity;
use Illuminate\Support\Facades\Auth;
use Calendar;

class AppoimentController extends Controller
{
    public function index()
    {
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
        
        $patients = Patient::all();
        $activities = Activity::all();
        //$times = array("9.00", "11.00", "13.00", "15.00", "17.00");
        $times =array(
            0 => array(
              'id' => '9.00',
              'name' => '9.00'
            ),
            1 => array(
              'id' => '9.00',
              'name' => '9.00'
            )
            );
        return view('appoiment.create', compact('patients', 'activities', 'times'));
    }
    public function store(AppoimentRequest $request){
        $p = new Patient;
        $id = Auth::user()->id;
        $idx = $id - 1;
        $patient = $p->storeAppoiment($request, $idx);
        return redirect()->route('employee.index')->with('info', 'La cita con el paciente cuya id es'.$request->id.' fue guardada.');
    }
}
