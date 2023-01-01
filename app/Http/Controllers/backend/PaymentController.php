<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paymentmethod;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{

    public function create(){
        return view('backend.pages.paymentMethod.create');
    }


    public function stock(Request $request){

        $validator=validator::make($request->all(),[
            'method_name' => 'required',
            'comments' => 'required',
        ]);

        if($validator->fails()){
            return redirect(route('method.form'))->withErrors($validator)->withInput();
        }

        Paymentmethod::create([
            'method_name' => $request->method_name,
            'comments' => $request->comments
        ]);

        return back()->with('success',' Yes! Payment Method Added Successfully');   

    }

    public function view(){
        $methodNames = Paymentmethod::all();
        return view('backend.pages.paymentMethod.paymentList',compact('methodNames'));
    }

    public function edit($id){
        $methodEdit=Paymentmethod::find($id);
        return view('backend.pages.paymentMethod.methodEdit',compact('methodEdit'));

    }


    public function update(Request $request, $id){

        $validator=validator::make($request->all(),[
            'method_name' => 'required',
            'comments' => 'required',
        ]);

        if($validator->fails()){
            return redirect(route('method.edit'))->withErrors($validator)->withInput();
        }
        $updateMethod_name=Paymentmethod::find($id);

        $updateMethod_name->update([
            'method_name' => $request->method_name,
            'comments' => $request->comments
        ]);

        return redirect(route('paymentMethod.show'))->with('success',' Yes ! Payment Method Updated Successfully');   

    }

    public function destroy($id){
        Paymentmethod::find($id)->delete();
        return redirect(route('paymentMethod.show'))->with('success',' OOh ! Payment Method Deleted Successfully');
    }
}
