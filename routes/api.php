<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\LaptopController;

Route::prefix('user')->group(function () {
    Route::get('/users', function (Request $request) {
        return $request->user();
    });
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
});

Route::resource('laptops', LaptopController::class, [
    'only' => [
        'index',
        'show'
    ]
]);

Route::resource('laptops', LaptopController::class, [
    'except' => [
        'index',
        'show'
    ]
])->middleware(['auth:api']);