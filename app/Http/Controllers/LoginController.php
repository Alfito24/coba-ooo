<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request){
        $credentials =  $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->peran==1){
                return redirect('/pelanggan');
            } else if(Auth::user()->peran==2){
                return redirect('/admin');
            } else if(Auth::user()->peran==3){
                return redirect('/mitra');
            }
            return redirect('/');
        }
        return back()->with('loginError', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return back();
    }
}
