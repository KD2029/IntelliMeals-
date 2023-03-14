<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function index() {
      //  print_r(session()->all());
        return view('login');
    }
}
