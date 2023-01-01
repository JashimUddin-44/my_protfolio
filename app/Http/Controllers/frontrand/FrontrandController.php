<?php

namespace App\Http\Controllers\frontrand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institiute;
use App\Models\Student;
use App\Models\Feetype;
use App\Models\Paymentmethod;

class FrontrandController extends Controller
{

    public function home(){
        $institute = Institiute::all();
        return view('frontrand.page.main',compact('institute'));
    }

    public function fee(){
        $students = Student::get();
        $feetypes = Feetype::get();
        $methods = Paymentmethod::get();
        return view('frontrand.page.feePayment',compact('students','feetypes','methods'));
    }

    public function about(){
        return view('frontrand.page.about');
    }

    public function contact(){
        return view('frontrand.page.contact');
    }

    public function gellery(){
        return view('frontrand.page.gellery');
    }

    public function notice(){
        return view('frontrand.page.notice');
    }

    public function result(){
        return view('frontrand.page.result');
    }

    
}
