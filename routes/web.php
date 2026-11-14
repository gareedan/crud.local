<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//маршрут на показ get
Route::get('/users',[UserController::class,'index'])->name('users.index');
//на создание post
Route::post('/users',[UserController::class,'store'])->name('users.store');
//на обновление put
Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/{user}',[UserController::class,'update'])->name('users.update');
//удаление delete
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
