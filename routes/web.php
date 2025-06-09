<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [\App\Http\Controllers\UserController::class, 'showUsers']);

Route::get('/test', [\App\Http\Controllers\SimpleController::class, 'test']);

Route::get('/form', [\App\Http\Controllers\FormProcessor::class, 'index']);
Route::post('/form', [\App\Http\Controllers\FormProcessor::class, 'store'])->name('store-form');

Route::get('/home', function () {
    return view('home', [
        'name' => 'Иван',
        'age' => 30,
        'position' => 'Разработчик',
        'address' => 'Москва, Россия'
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'Москва, Россия',
        'post_code' => '101000',
        'email' => 'example@example.com',
        'phone' => '+7 (123) 456-78-90'
    ]);
});