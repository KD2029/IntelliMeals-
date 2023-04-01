<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
        
    /**
     * index returns the view Login
     *
     * @return void
     */
    function index(){
        return view('/Login');
    }
   
   /**
    * Login validates the inputs before logging in a user with the use of
    *  manual authentication (Auth class)
    * @param  mixed $req
    * @return void
    */
   public function Login( Request $req){

        $valid = $req->validate([
            'email' => 'required|email',
            'password' => 'required '
        ]);
        if (Auth::attempt($valid)) {
            $req->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
      

}
