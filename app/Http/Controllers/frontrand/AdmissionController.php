<?php

namespace App\Http\Controllers\frontrand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admission;
use Illuminate\Support\Facades\File;

class AdmissionController extends Controller
{


    public function store(Request $request){
        $validator=validator::make($request->all(),[
            'student_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'mobaile_number' => 'required',
            'email' => 'required',
            'clist_id' => 'required',
            'department_id' => 'required',
            'image' => 'required',
        ]);
        if($validator->fails()){
            return redirect('home-page')->withErrors($validator)->withInput();
        }
        
        $fileName=null;
            if($request->hasfile('image')){
                 
                $fileName='jashim'.'.'.date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('uploads/student/',$fileName);

            }
        Admission::create([
            'student_name' => $request->student_name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'mobaile_number' => $request->mobaile_number,
            'email' => $request->email,
            'clist_id' => $request->clist_id,
            'department_id' => $request->department_id,
            'image'=>$fileName,
            
        ]);
        return back()->with('success','Admission Successfully');

    }

    public function view(){
        $admissions=Admission::with('student_department')->paginate(5);
        return view('backend.pages.admission.admissionList',compact('admissions'));
    }
    public function edit($id){
        $admissionEdit = Admission::find($id);
        return view('backend.pages.admission.edit',compact('admissionEdit'));
    }

    public function update(Request $request ,$id){ 
        
        $updateData=Admission::find($id);
        $fileName=$updateData->image;
        if($request->hasfile('image')){  
            $removeFile = public_path().'/uploads/student/'.$fileName;
            File::delete($removeFile);
            $fileName='jashim'.'.'.date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads/student/',$fileName);

        }

        $updateData->update([
            'student_name' => $request->student_name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'mobaile_number' => $request->mobaile_number,
            'email' => $request->email,
            'clist_id' => $request->clist_id,
            'department_id' => $request->department_id,
            'image'=>$fileName,
        ]);

        return to_route('Admission.view')->with('success','Updated Successfully');

    }

    public function destroy($id){
        Admission::find($id)->delete();
        return back()->with('danger','!Ooops Admission Student Deleted !');
    }
    
}


