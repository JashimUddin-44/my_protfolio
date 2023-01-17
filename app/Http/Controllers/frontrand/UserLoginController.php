<?php

namespace App\Http\Controllers\frontrand;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserLoginController extends Controller
{
    public function store(Request $request){
        $validators = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
        ]);
        if($validators->fails()){
            notify()->error($validators->getMessageBag());
            return redirect()->back();
        }
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
         ]);
         notify()->success('User Created Successfully.');
         return redirect()->back();
        
    }
    public function logout(){
        auth()->logout();
        notify()->success('Logout success.');
        return redirect()->back();
    }

    public function login(Request $request){
        $validations=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

        if($validations->fails())
        {
            notify()->error($validations->getMessageBag());
            return redirect()->back();
        }

        $credentials['email']=$request->email;
        $credentials['password']=$request->password;
        //dd($credentials);

        if(auth()->attempt($credentials) && auth()->user()->role =="admin"){
            notify()->success('Login success.');
            return redirect()->route('deshboard');
        }
        notify()->error('Invalid user info.');
        return redirect()->back();
    }
}
