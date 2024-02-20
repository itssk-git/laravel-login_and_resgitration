<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class authController extends Controller
{
    function register(){
        return view('users.registration');
    }
    function login(){
        return view('users.login');
    }
    function loginPost(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);


        $credentials=$request->only('username','password');
        if (Auth::attempt($credentials)) {
          
            return redirect()->intended(route('home'));
        } 
        else {
         
            return back()->withErrors(['login' => 'Invalid username or password']);
        }

    }
    function registerPost(Request $request){
     
        $user = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            
        ]);
        if(!$user){
            return redirect(route('register'))->with("error","registration failed");
        }
        else{
            return redirect(route('login'))->with("success","registration successful");

        }


    }
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
