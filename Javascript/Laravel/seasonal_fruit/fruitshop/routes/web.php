<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\homecontroller as FrontendHomecontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/',[practicecontroller::class,'index']);
Route::get('/home',[FrontendHomecontroller::class,'index']);

Route::get('/register',[AuthController::class,'index'])->middleware('guest'); // middlwear guest thi e thase jyare e login karse tyare e pacho login page ma nai jai sake url change karine
Route::post('/register',[AuthController::class,'store']);
// Route::get('/home',[\App\Http\Controllers\frontend\homecontroller::class,'index']);

Route::get('/login',[AuthController::class,'login'])->middleware('guest');  // middlwear guest thi e thase jyare e login karse tyare e pacho login page ma nai jai sake url change karine
Route::post('/login',[AuthController::class,'validate_login']);

Route::get('/logout',[AuthController::class,'logout']);
