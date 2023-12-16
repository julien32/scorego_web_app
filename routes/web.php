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
    return view('/main_views/home');
})->name('home');

Route::get('/rankings', function () {
    return view('/main_views/rankings');
})->name('rankings');

Route::get('/matches', function () {
    return view('/main_views/matches');
})->name('matches');

Route::get('/calendar', function () {
    return view('/main_views/calendar');
})->name('calendar');

Route::get('/search', function () {
    return view('/main_views/search');
})->name('search');
