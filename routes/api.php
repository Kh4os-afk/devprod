<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/licenca/{uuid}',[\App\Http\Controllers\LicencaController::class,'index'])->name('licenca.index');


