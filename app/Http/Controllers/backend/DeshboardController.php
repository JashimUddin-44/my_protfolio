<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeshboardController extends Controller
{
    public function admin(){
        return view('backend.pages.deshboard');
    }

    public function school(){
        return view('backend.pages.school_info');
    }

}
