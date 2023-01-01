<?php

namespace App\Http\Controllers\backend;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    public function create(){
        return view('backend.pages.teacher.create');
    }

    public function store(Request $request){

        $validator=validator::make($request->all(),[

            'name' => 'required|max:255',
            'subject' => 'required',
            'phone' => 'required|max:255',
            'email' => 'required|max:80',
            'image' => 'required',


        ]);

        if($validator->fails()){
           return redirect(url('/teacher_create'))->withErrors($validator)->withInput();
        }
        
        //insert code

        $teachers= new Teacher();
        $teachers->name = $request->name;
        $teachers->subject = $request->subject;
        $teachers->phone = $request->phone;
        $teachers->email = $request->email;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/teachers/', $filename);
            $teachers->image = $filename;
        }

        $teachers->save();
        session()->flash('msg','Teacher Successfully Added');
        return redirect()->route('shows');
        
    }



    public function show(Teacher $teacher){
        $teachers = Teacher::paginate(5);
        return view('backend.pages.teacher.teacherlist_view',compact('teachers'));
    }

    public function edit($teacher_id){
        $teacherEdit= Teacher::find($teacher_id);
        return view('backend.pages.teacher.teacheredit',compact('teacherEdit'));
    }

    public function update(Request $request, $id){
        $validator=validator::make($request->all(),[

            'name' => 'required|max:255',
            'subject' => 'required',
            'phone' => 'required|max:255',
            'email' => 'required|max:80',
            'image' => 'required',


        ]);

        if($validator->fails()){
           return redirect(url('/teacher_create'))->withErrors($validator)->withInput();
        }

        
        
        // update code

        $updatedata= Teacher::find($id);
        $updatedata->name = $request->name;
        $updatedata->subject = $request->subject;
        $updatedata->phone = $request->phone;
        $updatedata->email = $request->email;
        if($request->hasfile('image'))
        {
            $destination='upload/teachers/'.$updatedata->image;

            if(File::exists($destination)){
                File::delete($destination);
            }



            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/teachers/', $filename);
            $updatedata->image = $filename;
        }
        $updatedata->save();
        session()->flash('msg','Teacher Update Successfully Added');
        return redirect()->back();

        
    }

    public function destroy($id){
        Teacher::destroy($id);
        return redirect()->back()->with('msg','Teacher Deleted Successfully');
    }

}
