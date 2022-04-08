<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => "Register",
            'active' => 'register'
        ]);
   }
   public function store(Request $request){
    $validatedData=  $request->validate([
         'name' => 'required|max:25',
         'email' => 'required|email:dns|unique:users',
         'password' => 'required|min:8|max:20'
     ]);
     $validatedData['password'] = Hash::make($validatedData['password']);
     $validatedData['peran'] = 1;
     User::create($validatedData);
     $request->session()->flash('success', 'Registration was successful! Please Login to your account');
     return redirect('/login');
    }
}
