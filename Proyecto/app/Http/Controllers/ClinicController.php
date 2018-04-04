<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic;
class ClinicController extends Controller
{
    public function index(){
        
        $clinics = Clinic::orderBy('id', 'ASC')->paginate();
        return view('clinics.index',compact('clinics'));
    }
}
