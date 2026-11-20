<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GroupsController;
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




Route::get('/students',[StudentController::class,'index'])->name('student.index');
//на создание post
Route::post('/students',[StudentController::class,'store'])->name('student.store');
//на обновление put
Route::get('/students/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/{student}',[StudentController::class,'update'])->name('student.update');
//удаление delete
Route::delete('/students/{student}',[StudentController::class,'destroy'])->name('student.destroy');



Route::get('/groups',[GroupsController::class,'index'])->name('groups.index');
//на создание post
Route::post('/groups',[GroupsController::class,'store'])->name('groups.store');
//на обновление put
Route::get('/groups/{group}/edit',[GroupsController::class,'edit'])->name('groups.edit');
Route::put('/groups/{group}',[GroupsController::class,'update'])->name('groups.update');
//удаление delete
Route::delete('/groups/{group}',[GroupsController::class,'destroy'])->name('groups.destroy');




Route::get('/subject',[SubjectController::class,'index'])->name('subject.index');
//на создание post
Route::post('/subject',[SubjectController::class,'store'])->name('subject.store');
//на обновление put
Route::get('/subject/{subject}/subject',[SubjectController::class,'edit'])->name('subject.edit');
Route::put('/subject/{subject}',[SubjectController::class,'update'])->name('subject.update');
//удаление delete
Route::delete('/subject/{subject}',[SubjectController::class,'destroy'])->name('subject.destroy');
