<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Readcontroller;
use App\Http\Controllers\MoveController;
use App\Http\Controllers\UpdateController;





Route::get('/',[Readcontroller::class, 'read'])->name('read');
Route::get('/Update',[UpdateController::class , 'edit'])->name('update');


Route::post('/Add',[UpdateController::class, 'add'])->name('add');

Route::get('/edit/{id}',[UpdateController::class, 'edit']);


Route::post('/update/{id}',[UpdateController::class,'update'])->name('update');

Route::delete('delete/{id}',[UpdateController::class,'delete'])->name('delete');

Route::get('/Move',[MoveController::class, 'index'])->name('move');

Route::post('Moved/{id}',[MoveController::class,'moved'])->name('moved');

Route::get('deletetwo/{id}',[MoveController::class,'deletetwo'])->name('deletetwo');
