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

    

    public function store(Request $request){
        //dd($request->all());
        
        $credentials = $request->except('_token');
        if(auth()->attempt($credentials)){
            return redirect()->route('deshboard');
        }
        else{
            return back();
        }
        
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    // public function stock(Request $request){
    //     //dd($request->all());
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
            
    //     ]);
        
    //     //user save code

    //     User::create([
    //       'name' => $request->name,
    //       'email' => $request->email,
    //       'password' =>bcrypt($request->password),
          
    //     ]);
    //     //user login code
    //     if(Auth::attempt($request->only('email','password'))){
    //         return redirect('/');
        
    // }
    // public function logout(){
    //     \Session::flush();
    //     \Auth::logout();
    //     return redirect('');
    // }
}
