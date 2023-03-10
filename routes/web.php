<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $links = config("db.navbarMenu");
    $comics = config("db.comics");
    return view('welcome', compact("comics"), compact("links"));
})->name('comics');

Route::get('/info', function () {
    $links = config("db.navbarMenu");
    $comics = config("db.comics");
    return view('info', compact("comics"), compact("links"));
})->name('info');
