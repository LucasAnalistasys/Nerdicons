<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IconController;
use App\Http\Controllers\TesteController;

//Route::get('/', function () {return view('welcome');});
//Route::get('/library', [IconController::class, 'index']);

Route::get('/', [IconController::class, 'index'])->name('icons.index');





