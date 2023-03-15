<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\bmicontroller;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\nutritionanalysiscontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    session()->put("LOGGED_IN", true);
    return view('welcome');
});
//Route::get('/login',[AuthController::class,'index']);
Route::get('/Logout', [LogoutController::class, 'index']);
Route::get('/login', [nutritionanalysiscontroller::class, 'index']);
Route::group(["middleware" => "mygroup"], function () {
    Route::view("/users", 'users');

    Route::view("/dashboard", 'dashboard');
    Route::get('/Logout', [LogoutController::class, 'index']);
    Route::get('/dashboard', [nutritionanalysiscontroller::class, 'index']);
    Route::post('/nutritionanalysis', [nutritionanalysiscontroller::class, 'inserter']);
});

//Below are routes i added for the bmi
Route::get('/bmi', [bmicontroller::class, 'index']); //This displays the form
Route::post('/bmi', [bmicontroller::class, 'getBmi']); //This handles the submission
