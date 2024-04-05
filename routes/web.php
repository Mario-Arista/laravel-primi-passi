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

// Pagina gelato

Route::get('/gelato', function () {

    return view('gelato');

})->name('gelato');

// Pagina cioccolato

Route::get('/cioccolato', function () {

    return view('cioccolato');

})->name('cioccolato');

// Pagina cannolo

Route::get('/cannolo', function () {

    return view('cannolo');

})->name('cannolo');


// Pagina Ravazzatina


Route::get('/ravazzatina', function () {

    return view('ravazzatina');

})->name('ravazzatina');

