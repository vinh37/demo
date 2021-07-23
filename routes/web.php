<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo;
use App\Http\Controllers\Insert;

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

Route::get("/","App\Http\Controllers\Home@showInfo");
Route::get("showFull","App\Http\Controllers\Home@showFullInfo");
Route::post("insert",[Insert::class,"handleInsert"]);
Route::view("doinsert","insertview");
Route::get("admin","App\Http\Controllers\Control@handeGetData");
Route::get("delete/{id}","App\Http\Controllers\Control@handeDelete");
Route::get("formEdit/{id}","App\Http\Controllers\Control@formEdit");
Route::post("handleEdit/{id}","App\Http\Controllers\Control@handleEdit");

