<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IconController;
use App\Http\Controllers\TesteController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/library', [IconController::class, 'index']);

Route::get('/library', [IconController::class, 'index'])->name('icons.index');


//Route::get('/icons', [IconController::class, 'index']);
Route::get('/teste', [TesteController::class, 'index']);



