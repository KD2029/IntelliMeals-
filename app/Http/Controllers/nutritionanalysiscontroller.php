<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\nutrition_information;
use App\Models\foods;
use \Edamam\Support\Nutrient;
use \Edamam\Api\FoodDatabase\FoodRequest;
use \Edamam\Api\FoodDatabase\FoodDatabase;
use App\Models\food_categories;
use App\Models\food_options;
use App\Models\food_food_category;
use App\Models\food_food_options;

class nutritionanalysiscontroller extends Controller
{
       
    /**
     * index returns the view dashboard
     *
     * @return void
     */
    public function index(){
   
        return view("dashboard");
    }

    /**
     * api_call
     * This function handles the Api request and passes the posted form
     * values to the dashboard including the hidden inputs 
     * @param  mixed $req
     * @return void
     */
    public function api_call(Request $req){
    FoodDatabase::setApiCredentials( env('EDAMAM_ID'), env('EDAMAM_KEY'));
    
    $data1 = FoodRequest::find(['ingredient' => $req->input('ingr')])->results();
    
        echo "<pre>";
        //print_r($data1[0]);
       $result =json_decode($data1[0]->nutrients);
         $api_name = $data1[0]->label;
        //dd($req);
       $m = json_encode($req->select);//category
        $l = json_encode($req->select1);//part

 return view('dashboard')-> with('k',[
        'category' => $m,
        'part' => $l,
       'ingredient' =>$req->input('ingr'),
        'food'=> $api_name,
       'calories'=>$result->ENERC_KCAL,
       'protein' =>  $result->PROCNT,
       'fat' =>  $result->FAT,
       'carbohydrates' =>  $result->CHOCDF,
       'vitamins' => 30,
       'minerals' => $result->FIBTG
       ]);




    
      
      
}


/**
 * food_details_insert
 *  This functions inserts all food details to the related food tables
 * food table, nutrition_information table, food_categories table,
 * food_food_category table, food_options , food_food_options
 * @param  mixed $req
 * @return void
 */
public function inserter(Request $req){
   // dd($req->category);

$food = new foods();
    $food->name = $req->local_name;
    $food->api_name =  $req->input('api_name');
    $food->description = $req->input('description');
    $food->save();

      
  $data = new nutrition_information();
    //$data->id = $req->id;
    $data->food_id = $food->id;
    $data->serving_size = 50;
    $data->calories = $req->calories;
    $data->protein = $req->protein;
    $data->fat = $req->fat;
    $data->carbohydrates = $req->carbohydrates;
    $data->vitamins = $req->vitamins;
    $data->minerals = $req->minerals;
    $data->save();
    
    //$category = food_categories::create($req->category);
    $food_category = new food_categories();
    //$category->id = $req->id;
    $food_category->category = $req->category;
    $food_category->save();


    $food_food_category = new food_food_category();
    //$food_food_category->id = $req->id;
    $food_food_category->food_id = $food->id;
    $food_food_category->food_category_id = $food_category->id;
    $food_food_category->save();

    $food_option = new food_options();
   // $food_option->id = $req->id;
    $food_option->part = $req->part;
    $food_option->save();
    

    $food_food_option = new food_food_options();
    //$food_food_option->id = $req->id;
    $food_food_option->food_id = $food->id;
    $food_food_option->food_option_id = $food_option->id;
    $food_food_option->save();

    
}
 
    

    

}
