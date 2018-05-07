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

    public function show($id){
        $activity = Activity::find($id);
        return view('activity.show',compact('activity'));

    }

    public function destroy($id){

        $activity = Activity::find($id);
        $activity->delete();
        return back()->with('info','actividad eliminada');
    }
    public function edit ($id){
        $activity = Activity::find($id);
        return view('activity.edit',compact('activity'));
    }

    public function create (){
        return view('activity.create');
    }

    public function store (ActivityRequest $request){
        $ac = new Activity;
        $activity = $ac->storeActivity($request);
        return redirect()->route('activity.index');
    }
    public function update (ActivityRequest $request , $id){
        $ac = new Activity;
        $activity = $ac->updateActivity($request,$id);
        return redirect()->route('activity.index');
    }
}
