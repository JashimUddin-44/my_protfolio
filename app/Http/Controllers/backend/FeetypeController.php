<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feetype;
use Illuminate\Support\Facades\Validator;

class FeetypeController extends Controller
{
    public function ftform()
    {
        return view('backend.pages.feetype.create');
    }

    public function store(Request $request){
        $validator=validator::make($request->all(),[

            'fee_type' => 'required|max:255',

        ]);
        if($validator->fails()){
            return redirect(url('feetype-form'))->withErrors($validator)->withInput();
        }

        Feetype::create([

            'fee_type' => $request->fee_type,

        ]);
        return back()->with('success','Fee Type Added Successfuly');



    }

    public function views()
    {
        $feetype= Feetype::all();
        return view('backend.pages.feetype.feeTypeList',compact('feetype'));
    }

    public function edit($id){
        $feetypeEdit=Feetype::find($id);
        return view('backend.pages.feetype.feetypeEdit',compact('feetypeEdit'));

    }

    public function update(Request $request ,$id){

        $validator=validator::make($request->all(),[

            'fee_type' => 'required|max:255',

        ]);
        if($validator->fails()){
            return redirect(url('feetype-form'))->withErrors($validator)->withInput();
        }
        $updateType=Feetype::find($id);

        $updateType->update([

            'fee_type' => $request->fee_type,

        ]);
        return redirect(url('feetype-views'))->with('msg','Fee Type Updated Successfuly');

    }

    public function destroy($id){
        
        Feetype::find($id)->delete();

        return redirect(url('feetype-views'))->with('msg','Fee Type Deleted Successfuly');


    }
}
