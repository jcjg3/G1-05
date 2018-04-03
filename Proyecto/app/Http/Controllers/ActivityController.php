<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityController extends Controller
{
    //

    public function index(){

        $activities = Activity::orderBy('id','Desc')->paginate();

        return view('activity.index',compact('activities'));
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
