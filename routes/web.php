<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\taskController;


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
    return view('welcome');
});


Route::get("user/login",[UserController::class,'login']);
Route::post("user/doLogin",[UserController::class,'doLogin']);
Route::get("user/logout",[UserController::class,'logout']);

Route::resource('user', userController::class);

Route::resource('task', taskController::class)->middleware(['checkLogin']);


