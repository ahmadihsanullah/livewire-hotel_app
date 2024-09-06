<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/counter', App\Livewire\Counter::class);
Route::get('/todos', App\Livewire\Todos::class);