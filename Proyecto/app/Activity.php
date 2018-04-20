<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ActivityRequest;

class activity extends Model
{
/*
 $table->string('name');
            $table->string('description');
            $table->integer('votes');
*/
    protected $fillable = [
        'name', 'description', 'votes',
    ];

    public function patients(){
        return $this->belongsToMany(Patient::class, 'employee_patient')->withPivot('employee_id', 'fecha', 'hora');
    }

    public function employees(){
        return $this->belongsToMany(Employee::class, 'employee_patient')->withPivot('patient_id', 'fecha', 'hora');
    }

    public function searchActivity($id){

        return $activity = Activity::find($id);
    }

    public function listActivity(){
       
        return  $activity = Activity::all();;
    }
    
    public function storeActivity(ActivityRequest $request){
        $activity = new Activity;
        $activity->name = $request->name;
        $activity->description = $request->description;
        $activity->votes = $request->votes;
        $activity->save();

        return $activity;
    }

    public function updateActivity(ActivityRequest $request, $id){
        
        $activity = $this->searchActivity($id);
        $activity->name = $request->name;
        $activity->description = $request->description;
        $activity->votes = $request->votes;
        $activity->save();

        return $activity;

    }
}
