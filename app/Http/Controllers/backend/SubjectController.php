<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
class SubjectController extends Controller
{

    public function form(){
        return view('backend.pages.subject.form');
    }

    public function store(Request $request){
        $request->validate([
            'subject_name' => 'required',
            'subject_cradit' => 'required'
    
           ]);
    
           Subject::create([
            'subject_name' =>$request->subject_name,
            'subject_cradit' =>$request->subject_cradit
           ]);
           return to_route('subject.show')->with('success','Subject Added Successfull');
      
    }
    

   public function show(){
    $subjects = Subject::paginate(5);
    return view('backend.pages.subject.subjectList',compact('subjects'));
   }

  public function edit($id){
    $subjectEdit = Subject::find($id);
    return view('backend.pages.subject.subEdit',compact('subjectEdit'));
  }

  public function update(Request $request, $id){
    $subjectUpdate = Subject::find($id);
    $subjectUpdate->update([
      'subject_name' =>$request->subject_name,
      'subject_cradit' =>$request->subject_cradit
     ]);
     return to_route('subject.show')->with('success','Subject Updated Successfully');
  }
  public function destroy($id){
    Subject::find($id)->delete();
    return back()->with('success','Subject Deleted Successfully');
  }
}
