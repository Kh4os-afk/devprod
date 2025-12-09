<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\IndexController::class,'index']);
Route::post('/email',[\App\Http\Controllers\IndexController::class,'post']);

Route::get('/teste',\App\Livewire\Index::class);