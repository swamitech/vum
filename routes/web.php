<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/home', function () {
    return view('home');
});
*/
Route::get('/',[HomeController::class,'welcome']);

Route::get('/home',[HomeController::class,'index']);

Route::post('/upload',[HomeController::class,'upload']);

Route::get('/display',[HomeController::class,'display']);

Route::get('/delete/{id}',[HomeController::class,'delete']);

Route::get('/update_view/{id}',[HomeController::class,'update_view']);

Route::post('/update/{id}',[HomeController::class,'update']);

Route::get('/search',[HomeController::class,'search']);

Route::get('/header',[App\Http\Controllers\studController::class,'header']);

Route::get('upload',[App\Http\Controllers\studController::class,'index']);
//stud_display -> web url name // view is funcation name
Route::get('/stud_display',[App\Http\Controllers\studController::class,'view']);

Route::get('/search_stud',[App\Http\Controllers\studController::class,'search']);

Route::get('/stud_insert',[App\Http\Controllers\studController::class,'stud_insert']);


Route::get('/delete/{id}',[App\Http\Controllers\studController::class,'delete']);

Route::post('import-data',[App\Http\Controllers\studController::class,'uploadexcel']);