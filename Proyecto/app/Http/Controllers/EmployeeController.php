<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Employee;
use App\Patient;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $path ='employee';
     public function __construct()
     {
         $this->middleware('user');
     }
    public function index()
    {
        //Traemos todos los registros de los usuarios.
        $email = Auth::user()->email;
        //$patients = Employee::find(1)->patients()->where('email',Auth::user()->email);
        $patient = Employee::find(Auth::user()->id);
        //Enviamos esos registros a la vista.
        $patient->patients;
        //return view($this->path.'.index', compact('patients'));
        return dd($patient);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient;
        $patient->name = $request->name;
        $patient->birthdate = $request->birthdate;
        $patient->disability = $request->disability;
        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $patient->fill(['photo'=> asset($path)])->save();
        }
        $patient->save();
        return redirect()->route('employee.index')->with('info', 'El paciente '.$request->name.' fue guardado.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        return view($this->path.'.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view($this->path.'.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->name = $request->name;
        $patient->birthdate = $request->birthdate;
        $patient->disability = $request->disability;
        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $patient->fill(['photo'=> asset($path)])->save();
        }
        $patient->save();
        return redirect()->route('employee.index')->with('info', 'El paciente '.$request->name.' fue guardado.');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $name = Patient::find($id)->name;
        $patient->delete();
        return  back()->with('info', 'El paciente '.$name.' fue eliminado.');
    }
}
