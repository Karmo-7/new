<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\commentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/createblog',[BlogController::class,'create']);


Route::post('update/{id}',[blogController::class,'update'])->name('update');
Route::delete('delete/{id}',[blogController::class,'destroy'])->name('delete');
// Route::post('addcomment',[commentController::class,'create'])->name('addcomment');

Route::get('showcomments/{id}',[commentController::class,'ShowAllComment']);








