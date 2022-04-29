<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\OneController;

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

Route::view('/create','create');
// Route::get('/',[OneController::class,'read']);
Route::get('update/{id}',[OneController::class,'update']);
Route::post('save',[OneController::class,'create']);
Route::post('save/{id}',[OneController::class,'esave']);
Route::get('delete/{id}',[OneController::class,'delete']);
// Route::get('/home',[OneController::class,'read']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'read'])->name('home');
