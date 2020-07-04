<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }

    public function store(Request $request){
        
        /* dd($request->all()); */
        
        $validatedData = $request -> validate([
            'role' => ['required', 'string', 'max:12'],
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $User =new User(); 

        $User->role = $validatedData['role'];
        $User->name = $validatedData['name'];
        $User->surname = $validatedData['surname'];
        $User->birth_date = $validatedData['birth_date'];
        $User->email = $validatedData['email'];
        $User->password = Hash::make($validatedData['password']);
        
        $User->save();
        
        $status = "¡Usuario registrado de manera exitosa!";
        return back()->with(compact('status'));
    }
}
