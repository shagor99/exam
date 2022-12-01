<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontrol;
use App\Models\CatModel;
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


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[mycontrol::class,'show'] );
Route::get('catShow/',[mycontrol::class,'show'] );
Route::post('add_cat/',[mycontrol::class,'insert'] );
Route::get('show_edit/{cat_id}',[mycontrol::class,'showEdit'] );
Route::post('update/',[mycontrol::class,'update'] );
Route::get('delete/{cat_id}',[mycontrol::class,'delete'] );

