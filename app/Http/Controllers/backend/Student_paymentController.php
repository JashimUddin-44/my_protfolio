<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class Student_paymentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'student_id' => 'required',
            'feetype_id' => 'required',
            'amount' => 'required',
            'paid_amount' => 'required',
            'paymentmethod_id' => 'required',
        ]);

        Payment::create([
            'student_id' => $request->student_id,
            'feetype_id' => $request->feetype_id,
            'amount' => $request->amount,
            'paid_amount' => $request->paid_amount,
            'paymentmethod_id' => $request->paymentmethod_id

        ]);
        return redirect()->back()->with('message','Payment Created Successfully');
    }

    public function view(){
        $payments = Payment::with('students','students.students_class','students.student_section')->paginate(5);
    //    dd($payments);
        return view('backend.pages.studentPayment.paymentList',compact('payments'));
    }

    public function edit($id){
        $paymentEdit = Payment::with('students','students.students_class','students.student_section')->find($id);
        return view('backend.pages.studentPayment.paymentEdit',compact('paymentEdit'));
    }
    public function delete($id){
        Payment::find($id)->delete();
        return redirect()->back();
    }
}
