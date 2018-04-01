<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Employee;
use App\Http\Requests\EmployeeRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $path ='admin';
     
     protected $guarded = array();
    public function index()
    {
        $employees = Employee::all();
        //Enviamos esos registros a la vista.
        
        return view($this->path.'.index', compact('employees'));
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
    public function store(EmployeeRequest $request)
    {
       $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->contract = $request->contract;
        $employee->birthdate = $request->birthdate;
        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $employee->fill(['photo'=> asset($path)])->save();
        }
        $employee->save();
        return redirect()->route('admin.index')->with('info', 'El usuario '.$request->name.' fue guardado.');
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view($this->path.'.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view($this->path.'.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->birthdate = $request->birthdate;
        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $employee->fill(['photo'=> asset($path)])->save();
        }
        $employee->save();
        return redirect()->route('admin.index')->with('info', 'El usuario '.$request->name.' fue actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $name = Employee::find($id)->name;
        $employee->delete();
        return  back()->with('info', 'El usuario '.$name.' fue eliminado.');
    }
}
