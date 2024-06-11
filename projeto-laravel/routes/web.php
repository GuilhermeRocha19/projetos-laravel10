<?php

use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index-conta', [ContaController::class, 'index'])->name('conta.index');
