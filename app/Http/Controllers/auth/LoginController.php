<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        //dd($request->all());
        
        $credentials = $request->except('_token');
        if(auth()->attempt($credentials)){
            return redirect()->route('deshboard');
        }
        else{
            return back()->with('login')->withError('Oh no!You hit wrong data,Please Try Again.');
        }
        
    }
    public function logout(){
        auth()->logout();
        return redirect('login');
    }

    public function stock(Request $request){
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
        
        //user save code

        User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' =>bcrypt($request->password),
          
        ]);
        //user login code
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home-page');
        
    }
    // public function logout(){
    //     \Session::flush();
    //     \Auth::logout();
    //     return redirect('');
    // }
}
}