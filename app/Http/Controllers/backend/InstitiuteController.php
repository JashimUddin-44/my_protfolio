<?php

namespace App\Http\Controllers\backend;
use App\Models\Institiute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstitiuteController extends Controller
{

    public function create(){
        return view('backend.pages.institiute.form');
    }

    public function stocks(Request $request){

        $validator=validator::make($request->all(),[

            'institiute_name' => 'required|max:255',
            'institiute_code' => 'required',
            'institiute_address' => 'required|max:255',
            'image' => 'required',

        ]);
        if($validator->fails()){
            return redirect(url('/institiute_create'))->withErrors($validator)->withInput();
         }

         //Inser code

        $institiute = new Institiute();
        $institiute->institiute_name = $request->institiute_name;
        $institiute->institiute_code = $request->institiute_code;
        $institiute->institiute_address = $request->institiute_address;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/institiute/',$filename);
            $institiute->image =$filename;
        }
        $institiute->save();
        session()->flash('msg','Institiute Information Added Successfully');
        return redirect()->back();

    }
    
    public function show(Institiute $institiute){
        $institiute = institiute::all();
        return view('backend.pages.institiute.institiute_info_view',compact('institiute'));
    }

    public function editer($institiute_id){
        $institiuteEdit = Institiute::find($institiute_id);
        return view('backend.pages.institiute.edit',compact('institiuteEdit'));
    }
}