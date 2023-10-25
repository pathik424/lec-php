<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\home\backhomecontroller;
use App\Http\Controllers\Frontend\home\fronhomecontroller;
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
Route::get('/home',[fronhomecontroller::class,'index']);

Route::get('/register',[AuthController::class,'index'])->middleware('guest'); // middlwear guest thi e thase jyare e login karse tyare e pacho login page ma nai jai sake url change karine
Route::post('/register',[AuthController::class,'store']);
// Route::get('/home',[\App\Http\Controllers\frontend\homecontroller::class,'index']);

// login
Route::get('/login',[AuthController::class,'login'])->middleware('guest');  // middlwear guest thi e thase jyare e login karse tyare e pacho login page ma nai jai sake url change karine
Route::post('/login',[AuthController::class,'validate_login']);

// logout
Route::get('/logout',[AuthController::class,'logout']);

//admin
Route::get('/admin/dashboard',[backhomecontroller::class,'index'])->middleware(['auth','adminmiddleware']); // ama 2 middleware nakhya che 1st auth middleaare e login che ke nai e check karse 2nd admin middleware e check karse ke e role as same che ke nai


