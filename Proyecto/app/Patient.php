<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\PatientRequest;

use App\Http\Requests\AppoimentRequest;
use Illuminate\Support\Facades\Storage;



class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'name', 'birthdate', 'disability','phone', 'address' , 'photo', 'sexo'
    ];

    public function employees(){
        return $this->belongsToMany(Employee::class, 'employee_patient')->withPivot('activity_id', 'fecha', 'hora');
    }

    public function activities(){
        return $this->belongsToMany(Activity::class, 'employee_patient')->withPivot('employee_id', 'fecha', 'hora');
    }

    public function search($id){
        return $patient = Patient::find($id);
    }
    public function searchPatient($id){

        return $patient = Patient::find($id);
    }

    public function listPatient(){
       
        return  $patient = Patient::all();;
    }
    
    public function storePatient(PatientRequest $request){
        $patient = new Patient;
        $patient->name = $request->name;
        $patient->disability = $request->disability;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->birthdate = $request->birthdate;
        $patient->sexo = $request->sexo;
        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $patient->fill(['photo'=> asset($path)])->save();
        }
        $patient->save();

        return $patient;
    }
    public function storeAppoiment(AppoimentRequest $request, $id){
       
        $patient = $this->search($request->patient_id);

        $patient->employees()->attach($id,['activity_id'=>$request->activity_ids,'fecha' => $request->fecha, 'hora' =>$request->hora]);
        return $patient;
    }

    public function updatePatient(PatientRequest $request, $id){
        $patient = $this->searchPatient($id);
        $patient->name = $request->name;
        $patient->disability = $request->disability;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->birthdate = $request->birthdate;
        $patient->sexo = $request->sexo;
        if($request->file('photo')){
            $path = Storage::disk('public')->put('images',  $request->file('photo'));
            $patient->fill(['photo'=> asset($path)])->save();
        }
        $patient->save();

        return $patient;

    }
    public function list(){
        $patients = Patient::all();
        return $patients;
    }

    public function records() {
        return $this->hasOne('App\Record');
    }
}
