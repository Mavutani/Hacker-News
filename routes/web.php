<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//fetch news from database
Route::get('/', [App\Http\Controllers\HackerController::class, 'index']);

//New news from API
Route::get('/new', [App\Http\Controllers\HackerController::class, 'new']);

//Past news from API
Route::get('/past', [App\Http\Controllers\HackerController::class, 'past']);

//Comments from API
Route::get('/comments', [App\Http\Controllers\HackerController::class, 'comments']);

//Jobs from API
Route::get('/submit', [App\Http\Controllers\HackerController::class, 'submit']);

//Profile Conroller
Route::get('/id={name}', [App\Http\Controllers\ProfileController::class, 'index']);

//Fetch Comments from api and save to db
Route::get('/item/{sid}', [App\Http\Controllers\HackerController::class, 'comments']);

//Fetch user from api and save
Route::get('/user/{by}', [App\Http\Controllers\HackerController::class, 'user']);
