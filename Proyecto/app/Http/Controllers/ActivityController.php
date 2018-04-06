<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Http\Requests\ActivityRequest;

class ActivityController extends Controller
{
    //

    public function index(){

        $activities = Activity::orderBy('id','Desc')->paginate();

        return view('activity.index',compact('activities'));
    }
    public function store(ActivityRequest $request){
        $activity = new Activity;
        
        $activity->name = $request->name;
        $activity->description = $request->description;
        $activity->votes = 0;

        $activity->save();

//falta mensaje 
        return redirect()->route('activity.index');
    }
    public function update(ActivityRequest $request, $id){
        $activity = Activity::find($id);

        $activity->name = $request->name;
        $activity->description = $request->description;
        $activity->votes = $request->votes;

        $activity->save();

        return redirect()->route('activity.index');
    }
    public function create(){
        return view('activity.create');

    }

    public function edit($id){
        $activity = Activity::find($id);
        return view('activity.edit',compact('activity'));

    }

    public function show($id){
        $activity = Activity::find($id);
        return view('activity.show',compact('activity'));

    }

    public function destroy($id){

        $activity = Activity::find($id);
        $activity->delete();
        return back()->with('info','actividad eliminada');
    }
}
