<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;
use Illuminate\Support\Facades\Auth;
use Calendar;

class AppoimentController extends Controller
{
    public function index()
    {
        /*
        $id = Auth::user()->id;
        $empl = Employee::find(1);
        echo $id;
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

}
