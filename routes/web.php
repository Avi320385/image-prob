<?php

use App\Http\Controllers\GellaryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[GellaryController::class,'index'])->name('upload');
Route::POST('/image/upload',[GellaryController::class,'store'])->name('image.upload');
Route::get('/image/show',[GellaryController::class,'show'])->name('image.show');

//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
