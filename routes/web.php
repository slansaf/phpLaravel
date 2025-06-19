<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TestFormController;
use App\Http\Controllers\EmployeeUserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserResponseController;
use App\Http\Controllers\PdfGeneratorController;

Route::get('/', function () {
	return view('welcome');
});


// Route::get('/users', [\App\Http\Controllers\UserController::class, 'showUsers']);

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


Route::post('/employee-user', [EmployeeUserController::class, 'store'])->name('store_employee');
Route::get('/employee-user/{id?}', [EmployeeUserController::class, 'show'])->name('show_employee');

Route::post('/add-books', [BookController::class, 'store'])->name('store_books');
Route::get('/add-books', [BookController::class, 'show'])->name('show_books');

Route::get('/users', [UserResponseController::class, 'index']);
Route::get('/users/{id?}', [UserResponseController::class, 'show']);
Route::post('/users', [UserResponseController::class, 'store']);
Route::get('/resume/{id?}', [PdfGeneratorController::class, 'index']);

Route::get('/news/create-test', function () {
    $news = new \App\Models\News();
    $news->title = 'Test News Title';
    $news->body = 'This is a test news body.';
    $news->save();
    return 'Test news created!';
});

Route::get('/news/{id}/hide', function ($id) {
    $news = \App\Models\News::findOrFail($id);
    $news->hidden = true;
    $news->save();
    NewsHidden::dispatch($news);
    return 'News hidden!';
});
