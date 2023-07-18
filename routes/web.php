<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::resource('post', \App\Http\Controllers\PostController::class);

Route::get('/', \App\Http\Controllers\PostController::class . '@index');

Route::get('post/', \App\Http\Controllers\PostController::class . '@index')->name('post.index');
Route::get('post/create', \App\Http\Controllers\PostController::class . '@create')->name('post.create');
Route::post('post/', \App\Http\Controllers\PostController::class . '@store')->name('post.store');
Route::get('post/show/{id}', \App\Http\Controllers\PostController::class . '@show')->name('post.show');
Route::get('post/edit/{id}', \App\Http\Controllers\PostController::class . '@edit')->name('post.edit');
Route::patch('post/show/{id}', \App\Http\Controllers\PostController::class . '@update')->name('post.update');
Route::delete('post/{id}', \App\Http\Controllers\PostController::class . '@destroy')->name('post.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
