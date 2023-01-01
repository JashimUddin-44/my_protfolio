<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{

    public function create(){
        return view('backend.pages.attendance.create');
    }

    public function store(Request $request){

        //dd($request->all());
        $request->validate([
            'student_name' => 'required',
            'class_name' => 'required',
            'department_name' => 'required',
            'section_name' => 'required',
            'roll' => 'required',
        ]);
        Attendance::create([
            'student_name' => $request->student_name,
            'class_name' => $request->class_name,
            'department_name' => $request->department_name,
            'section_name' => $request->section_name,
            'roll' => $request->roll,
        ]);
        return to_route('student.attendance')->with('success','Attendance Added Successfully');
    }
    
    public function view(){
        $viewData = Attendance::paginate(5);
        return view('backend.pages.attendance.attendanceList',compact('viewData'));
    }

    public function edit($id){
        $attendanceEdit = Attendance::find($id);
        return view('backend.pages.attendance.edit',compact('attendanceEdit'));
    }

    public function update(Request $request ,$id){
        $updateData = Attendance::find($id);
        $updateData->update([
            'student_name' => $request->student_name,
            'class_name' => $request->class_name,
            'department_name' => $request->department_name,
            'section_name' => $request->section_name,
            'roll' => $request->roll,
        ]);
        return to_route('student.attendance')->with('success','Attendance Updated Successfull');  
    }

    public function delete($id){
        Attendance::find($id)->delete();
        return back();
    }
}
