<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EmployeeRequest;


class employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'name', 'email', 'birthdate', 'contract', 'phone', 'photo', 'password', 'id_user',
    ];
    public function patients(){
        return $this->belongsToMany(Patient::class, 'employee_patient')->withPivot('activity_id', 'fecha', 'hora');
    }

    public function activities(){
        return $this->belongsToMany(Activity::class, 'employee_patient')->withPivot('patient_id', 'fecha', 'hora');
    }
    public function clinics(){
        return $this->belongTo(Clinic::class, 'clinic_employee');
    }

    public function list(){
        $employees = Employee::all();
        return $employees;
    }


    public function store(EmployeeRequest $request, $user){
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->contract = $request->contract;
        $employee->birthdate = $request->birthdate;
        $employee->clinic_id = $request->clinic;
        $employee->password = $request->password;
        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $employee->fill(['photo'=> asset($path)])->save();
        }
        $employee->user()->associate($user);
        $employee->save();   

    
    }

    public function search($id){
        return $employee = Employee::find($id);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    
}
