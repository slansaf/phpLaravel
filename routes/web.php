<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [\App\Http\Controllers\UserController::class, 'showUsers']);

Route::get('/test', [\App\Http\Controllers\SimpleController::class, 'test']);

Route::get('/form', [\App\Http\Controllers\FormProcessor::class, 'index']);
Route::post('/form', [\App\Http\Controllers\FormProcessor::class, 'store'])->name('store-form');