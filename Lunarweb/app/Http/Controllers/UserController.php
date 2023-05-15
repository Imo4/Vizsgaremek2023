<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;  
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth; 

use App\Models\User;
use Illuminate\Support\Facades\DB; 

class UserController extends Controller
{
    function Login(Request $request){
        $request -> validate([
            'fnev' => 'required',
            'jelszo' => 'required'
        ], [
            'fnev.required' => 'A felhasználónév nem lehet üres!',
            'jelszo.required' => 'A jelszó nem lehet üres!'
        ]);

        $auth['name'] = $request -> fnev;
        $auth['password'] = $request -> jelszo;
        
        
        if (Auth::attempt($auth)) 
            return redirect('/profil');
        else
            return view('/bejelentkezes');
    }

    function Reg(Request $request){
        $request -> validate([
            'fnev' => 'required',
            'jelszo' => 'required|min:8',
            'email' => 'required|email|unique:users'
        ],[
            'fnev.required' => 'A felhasználónév nem lehet üres!',
            'jelszo.required' => 'A jelszó nem lehet üres!',
            'jelszo.min' => 'A jelszónak minimum 8 karakternek kell lennie!',
            'email.required' => 'Az e-mail nem lehet üres!', 
            'email.email' => 'Az e-mail cím helytelen!',
            'email.unique' => 'Ez az e-mail cím már foglalt!'
        ]);
        
        $user = new User;
        $user -> name = $request -> fnev;
        $user -> email = $request ->email;
        $user -> password = Hash::make($request ->jelszo);
        $user -> Save();
        return view('sikeresreg');
    }

    function Logout(){
        Session::flush();
        Auth::logout(); 
        return redirect('/');
    }

    function Profil(){
        return view('/profil',[
            'novenyek' => DB::table('novenyek')->get() 
        ]);

        
    }
     function Noveny($id){
         return view('/noveny',[
             'noveny' => DB::table('novenyek')->find($id)
         ]);   
 } 
 
}      
