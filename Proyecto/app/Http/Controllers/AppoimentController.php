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
        
        $id = Auth::user()->id;
        $empl = Employee::get();
        $patients = NULL;
        foreach($empl as $emp){
            if($emp->user_id == $id){
                $patients = Employee::find($emp->id)->patients;
                //return view($this->path.'.index', compact('patients'));
                break;
            }
        }
        
        $data = $esemp->patients;
        $events = [];
        if($data->count()) {
            foreach ($data as $value) {
                $nompaciente = Patient::find($value->pivot->patient_id)->name;
                $events[] = Calendar::event(
                    $nompaciente,
                    true,
                    new \DateTime($value->pivot->fecha),
                    new \DateTime($value->pivot->fecha),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => 'employee/'.$value->pivot->patient_id,
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('appoiment.index', compact('calendar', 'patients'));
    }
    public function create(Patient $patient)
    {
        $patients = Patient::all();
        $activities = Activity::all();
        //$times = array("9.00", "11.00", "13.00", "15.00", "17.00");
        $times =array(
              '9.00' => '9.00',
              '10.00' => '10.00',
              '11.00' => '11.00',
              '12.00' => '12.00',
              '13.00' => '13.00',
              '14.00' => '14.00',
              '15.00' => '15.00',
              '16.00' => '16.00',
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
