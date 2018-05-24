<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Employee;
use App\User;
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
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $employee = new Employee();
        //Enviamos esos registros a la vista.
        $employees = $employee->list();
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
    public function store(EmployeeRequest $request) {
        $employee = new Employee;
        $user = new User;
        $user->name= $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->is_subscriber = '1';
        $user->role = 'user';
        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $user->photo = $path;  
        }
        $user->save();
        $employee->store($request, $user);
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
        $employe = new Employee;
        $employee = $employe->search($id);
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
        $employe = new Employee;
        $employee = $employe->search($id);
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
        $employe = new Employee;
        $employee = $employe->search($id);
        $employee->updateP($request, $id);
        $user = User::find($id+1);
        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $user->photo = $path;  
            $user->save();  
        }
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
        $employe = new Employee;
        $employee = $employe->search($id);
        $name = $employee->name;
        $user = User::find($id);
        $employee->delete();
        $user->delete();
        return  back()->with('info', 'El usuario '.$name.' fue eliminado.');
    }
}
