<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Routine;
class RoutineController extends Controller
{

    public function form(){
        $teachers = Teacher::all();
        $subjects = Subject::all();
        return view('backend.pages.classRoutine.form',compact('teachers','subjects'));
    }

    public function store(Request $request){
        
        $request->validate([
            'teacher_id' => 'required',
            'subject_id' => 'required',
            'time' => 'required',

        ]);

        Routine::create([
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id,
            'time' => $request->time,
        ]);
        return to_route('classRoutine.show')->with('message','Class routine Created Succesfully');
    }


    public function show(){
        $routine = Routine::with('student_subject')->paginate(5);
        return view('backend.pages.classRoutine.routineList',compact('routine'));
    }

    public function edit($id){
        $teachers = Teacher::get();
        $subjects = Subject::get();
        $routines= Routine::find($id);
        return view('backend.pages.classRoutine.routineEdit',compact('teachers','subjects','routines'));
    }

    public function update(Request $request,$id){
        $updateRoutine = Routine::find($id);

        $updateRoutine->update([
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id,
            'time' => $request->time,
        ]);
        return to_route('classRoutine.show');
       
    }

    public function delete($id){
        Routine::find($id)->delete();
        return back();
    }
}
