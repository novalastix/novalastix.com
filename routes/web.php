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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/terminal', function () {
    return view('terminal');
})->name('terminal');

Route::get('/md', function () {
    return view('markdown');
})->name('markdown');


Route::get('/blank', function () {
    return view('blank');
})->name('blank');
