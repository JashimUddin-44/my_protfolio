<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Department;
class StudentController extends Controller
{
    public function studentget(){
        
        $students = Student::find(1)->only('student_name');
        return response()->json([
            'Success'=> true,
            'message'=>'all students showing',
            'data'=>$students
        ]);
    }

    public function departmentCreate(Request $request){
       

       $department = Department::create([
        'department_name'=>$request->department_name

       ]);

        return response()->json([
            'success'=>true,
            'message'=>'Department Created',
            'data'=>$department
        ]);

    }

    public function teacherget(){
        $teachers = Teacher::find(1);
        return response()->json([
            'success'=>true,
            'message'=>'All teacher show',
            'data'=>$teachers
        ]);
    }
}

