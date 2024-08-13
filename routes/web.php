<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\Registercontroller;
use App\Http\Controllers\commentController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[blogController::class,'index'])->name('index');
Route::get('create',[blogController::class,'create'])->name('create');
Route::post('store',[blogController::class,'store'])->name('store');
Route::post('update/{id}',[blogController::class,'update'])->name('update');
Route::get('edit/{id}',[blogController::class,'edit'])->name('edit');
Route::get('show/{id}',[blogController::class,'show'])->name('show');
Route::delete('delete/{id}',[blogController::class,'destroy'])->name('delete');

Route::post('addcomment',[commentController::class,'create'])->name('addcomment');
Route::get('showcomments/{id}',[commentController::class,'ShowAllComment'])->name('showAll');
// Route::post('/blog/{blogId}/comment', 'CommentController@create')->name('addcomment');


// Route::get('logout',[Registercontroller::class, 'logout']);
// Route::post('/register_jF', [RegisterController::class,'register']);
// Route::post('/login', [LoginController::class, 'login']);



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
