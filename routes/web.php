<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('home');
//});
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/categories',[\App\Http\Controllers\CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{id}',[\App\Http\Controllers\CategoryController::class,'show'])->name('categories.show');


