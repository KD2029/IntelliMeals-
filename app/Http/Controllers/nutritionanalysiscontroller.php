<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nutrition_information;
use Illuminate\Support\Facades\DB;
 
 


class nutritionanalysiscontroller extends Controller
{
    public function index(){
   
    return view("dashboard");
}


public function inserter(Request $req){
    \Edamam\Api\FoodDatabase\FoodDatabase::setApiCredentials('974445c8', '278dce0393f8a92b0db4094b85e3af49');
    $data1 = \Edamam\Api\FoodDatabase\FoodRequest::find(['ingredient' => $req->input('ingr')])->results();

    echo "<pre>";
    $result =json_decode($data1[0]->nutrients);
    //print_r($result);
   //print_r($result->ENERC_KCAL);
    //print_r(json_decode($data1));
  

  // return view('dashboard')-> with('k',$data1);

//    $data = new nutrition_information();
//     $data->id = $req->id;
//     $data->food_id = $req->food_id;
//     $data->serving_size = $req->serving_size;
//     $data->calories = $req->calories;
//     $data->protein = $req->protein;
//     $data->fat = $req->fat;
//     $data->carbohydrates = $req->carbohydrates;
//     $data->vitamins = $req->vitamins;
//     $data->minerals = $req->minerals;
//     $data->save();

     DB::table('nutrition_information')->insert([
    // 'id' => 5,
     'food_id' => 6,
     'serving_size' => 35,
     'calories' => $result->ENERC_KCAL,
     'protein' =>  $result->PROCNT,
     'fat' =>  $result->FAT,
     'carbohydrates' =>  $result->CHOCDF,
     'vitamins' => 30,
     'minerals' => $result->FIBTG

     ]);
}
   
}

