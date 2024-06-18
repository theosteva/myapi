<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopControllers;
Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/laptops', function () {
    return view('pages.plp');
})->name('plp');

Route::get('/laptops/{i}', function () {
    return view('pages.pdp');
})->name('pdp');
