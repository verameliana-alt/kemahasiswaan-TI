<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MathController;

Route::prefix('math')->group(function () {
    Route::get('add',  [MathController::class, 'add']);
    Route::post('add', [MathController::class, 'add']);
});