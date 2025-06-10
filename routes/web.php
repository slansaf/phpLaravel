<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TestFormController;

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

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');

Route::get('/form', [TestFormController::class, 'displayForm'])->name('show_form');
Route::post('/form', [TestFormController::class, 'postForm'])->name('post_form');
