<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Index::class);
Route::get('/conciliador', \App\Livewire\Conciliador::class);