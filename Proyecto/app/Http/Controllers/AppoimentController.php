<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;
use Illuminate\Support\Facades\Auth;

class AppoimentController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $empl = Employee::find(1);
        echo $id;
        $patients = $empl->patients;
        return view('appoiment.index', compact('patients'));
    }

}
