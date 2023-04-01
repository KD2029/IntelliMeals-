<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class signupcontroller extends Controller
{
    //
    function index(){
        return view('/signup');
        }
      function signup(Request $req){
          $valid = $req->validate([
              'name'=>'required  ',
              'email'=>'required|email',
              'password'=>'required',
          ]);
          $user = new User();
            $user->insert([
            'name'=>$req->input('name'),
              'email'=>$req->input('email'),
              'password'=>Hash::make($req->input('password')) 
              
          ]);
          $user->save();
          return redirect('login');
      }  
      
}
