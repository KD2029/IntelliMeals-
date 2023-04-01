<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;

class UserController extends Controller
{
    public function index(){
    return view('/users');
    }
    public function data(){
  //  return DB::select("select * from nutrition_information");
    //$data = DB::select("select * from nutrition_information");
   //$data =  DB::insert('insert into nutrition_information (id, food_id,serving_size,calories,protein,fat,carbohydrates,vitamins, minerals) values (?, ?,?,?,?,?,?,?,?)', [2, 2,2,30,40,40,50,45,34,]);
   // $data = DB::update( 'update nutrition_information set calories = 40 where id = ?', ['2']);
  // $data  = DB::delete('delete from nutrition_information where id = ?', ['2']);
  $data = users::all();
  $arr['data'] = $data;
  return view('users')->with('arr',$arr);
    }
}
