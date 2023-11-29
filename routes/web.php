<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/accolades', function () {
    return view('accolades');
})->name('accolades');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
